<?php

namespace App\Http\Controllers;


use App\User;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use Cmgmyr\Messenger\Models\Thread;
use Cmgmyr\Messenger\Models\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Cmgmyr\Messenger\Traits\Messagable;
use Cmgmyr\Messenger\Models\Participant;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class MessagesController extends Controller
{
  public function _construct()
  {
    Auth::loginUsingId(1);
  }

  public function index()
  {
    Auth::loginUsingId(1);
    $currentUserId = Auth::user()->id;
    $threads = Thread::getAllLatest()->get();


    return view('messenger.index', compact('threads', 'currentUserId'));
  }

  public function create()
  {
      Auth::loginUsingId(1);
    $users = User::where('id', '!=', Auth::id())->get();

    return view('messenger.create', compact('users'));
  }

  public function show($id)
  {
    Auth::loginUsingId(1);
    try
    {
      $thread = Thread::findOrFail($id);
    } catch (ModelNotFoundException $e) {
      Session::flash('error_message', 'The thread with ID: ' . $id . ' was not found.');

      return redirect('messages');
    }

    $userId = Auth::user()->id;
    $users = User::whereNotIn('id', $thread->participantsUserIds($userId))->get();
    $thread->markAsRead($userId);
    return view('messenger.show', compact('thread', 'users'));
  }

  public function store()
  {
      Auth::loginUsingId(1);
    $input = Input::all();
    $thread = Thread::create(
    [
    'subject' => $input['subject'],
    ]
    );
    // Creator
    Message::create(
    [
    'thread_id' => $thread->id,
    'user_id'   => Auth::user()->id,
    'body'      => $input['message'],
    ]
    );
    // Sender
    Participant::create(
    [
    'thread_id' => $thread->id,
    //Current post's userID
    'user_id'   => Auth::user()->id,
    'last_read' => new Carbon,
    ]
    );
    // Recipients
    if (Input::has('recipients')) {
      $thread->addParticipant($input['recipients']);
    }
    Session::flash('flash_message','Message sent');
    return redirect('messages');
  }

  public function update($id)
    {
        Auth::loginUsingId(1);
        try {
            $thread = Thread::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            Session::flash('error_message', 'The thread with ID: ' . $id . ' was not found.');
            return redirect('messages');
        }
        $thread->activateAllParticipants();
        // Message
        Message::create(
            [
                'thread_id' => $thread->id,
                'user_id'   => $thread->creator()->id,
                'body'      => Input::get('message'),
            ]
        );
        // Add replier as a participant
        $participant = Participant::firstOrCreate(
            [
                'thread_id' => $thread->id,
                'user_id'   => Auth::user()->id,
            ]
        );
        $participant->last_read = new Carbon;
        $participant->save();
        // Recipients
        if (Input::has('recipients')) {
            $thread->addParticipant(Input::get('recipients'));
        }
        Session::flash('flash_message','successfully saved.');
        return redirect('messages/' . $id);
    }

}
