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
use App\Http\Requests\Message\CreateMessageRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class MessagesController extends Controller
{
  public function __construct()
  {
    Auth::loginUsingId(1);
  }

  public function index()
  {
    $currentUserId = Auth::user()->id;
    $threads = Thread::getAllLatest()->get();

    return view('messenger.index', compact('threads', 'currentUserId'));
  }

  public function create($user_id)
  {
    $users = User::where('id', '!=', Auth::id())->get();


    return view('messenger.create', compact('user_id'));
  }

  public function show($id)
  {
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

  public function store(CreateMessageRequest $request)
  {
    $thread = Auth::user()->threads()->create($request->only(['subject']));
    $thread->messages()->create([
      'user_id'   => Auth::user()->id,
      'body'      => $request->message,
    ]);


    Participant::create(
    [
        'thread_id' => $thread->id,
        //Current post's userID
        'user_id'   => $request->recipient,
        'last_read' => new Carbon,
    ]
);

    Session::flash('flash_message','Message sent');
    return redirect('messages');
  }

  public function update($id)
  {

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
    'user_id'   => Auth::user()->id,
    'body'      => Input::get('message'),
    ]
    );
    $participant = Participant::where('user_id', 789)->where('thread_id', $thread->id)->first();
    $participant->last_read = new Carbon;
    $participant->save();

    Session::flash('flash_message','successfully posted');
    return redirect('messages/' . $id);
  }

}
