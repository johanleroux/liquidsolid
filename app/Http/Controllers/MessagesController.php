<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use Cmgmyr\Messenger\Models\Thread;
use Cmgmyr\Messenger\Models\Message;
use Cmgmyr\Messenger\Traits\Messagable;
use Cmgmyr\Messenger\Models\Participant;

class MessagesController extends Controller
{
  /**
  * Contructor
  */
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $threads = Auth::user()->threads()->get();
    return view('messages.index', compact('threads'));
  }

  public function create()
  {
    abort(404);
  }

  public function show(int $id)
  {
    $thread = Thread::findOrFail($id);
    $thread->markAsRead(Auth::user()->id);

    return view('messages.show', compact('thread'));
  }

  public function store(Request $request)
  {
    abort_unless(Auth::user()->id != $request->recipient, 404);

    $this->validate($request, [
      'recipient' => 'required|exists:users,id',
      'subject' => 'required',
      'message' => 'required'
    ]);

    $thread = Auth::user()->threads()->create($request->only(['subject']));
    $thread->messages()->create([
      'user_id'   => Auth::user()->id,
      'body'      => $request->message,
      ]);

      Participant::create([
      'thread_id' => $thread->id,
      'user_id'   => $request->recipient,
      'last_read' => null,
      ]);

      $participant = Participant::where('user_id', Auth::user()->id)->where('thread_id', $thread->id)->first();
      $participant->last_read = new Carbon;
      $participant->save();

      notify()->flash('Message sent!', 'success');
      return redirect()->back();
    }

    public function update(Request $request, int $id)
    {
      $thread = Thread::findOrFail($id);

      $this->validate($request, [
      'message' => 'required'
      ]);

      $thread->activateAllParticipants();
      // Message
      Message::create([
      'thread_id' => $thread->id,
      'user_id'   => Auth::user()->id,
      'body'      => $request->message,
      ]);

      $participant = Participant::where('user_id', Auth::user()->id)->where('thread_id', $thread->id)->first();
      $participant->last_read = new Carbon;
      $participant->save();

      notify()->flash('Message sent!', 'success');
      return redirect()->back();
    }
  }
