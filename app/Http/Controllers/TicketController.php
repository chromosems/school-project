<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Ticket;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'department'=>'required',
            'location' => 'required',
            'description' => 'required',
        ]);

        /**storing  form data */
        $slug = str_slug($request->title);
        $ticket = new Ticket($request->all());
        $ticket->slug = $slug;
        $ticket->save();

        $data = array(
            'ticket' => $slug,
        );
        Mail::send('mails.tickets', $data, function ($message) {
            $message->from('emmaopuda@gmail.com', 'Technical Support System');

            $message->to('opudaemmanuel@gmail.com')->subject('A new Ticket has been created by customer  please respond before closure');
        });
        return redirect('/tickets')->with('success', 'A new ticket has been created! its unique id is:' . $slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $ticket = Ticket::whereSlug($slug)->first();
        /**this code display all the comments created */
        $comments = $ticket->comments()->with('user')->get();
        return view('tickets.show', compact('ticket', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        return view('tickets.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        // dd($ticket);
        // $ticket = Ticket::whereSlug($slug)->firstOrFail();
        $ticket->title = $request->get('title');
        $ticket->location = $request->get('location');
        $ticket->description = $request->get('description');
        $ticket->slug = str_slug($request->title);
        if ($request->get('status') != null) {
            $ticket->status = 0;
        } else {
            $ticket->status = 1;
        }

        $ticket->save();
        return redirect('/tickets')->with('status', 'The  ticket' .  $ticket->slug  .   'has been updated!');
    }

    public function newComment(Request $request, Ticket $ticket)
    {
        $request->validate([
            'content'=>'required|min:3',
        ]);

        $comment = new Comment($request->all());
        $comment->user_id = Auth::user()->id;
        $comment->ticket_id = $ticket->id;
        $comment->save();
        return redirect()->back()->with('status', 'your comment has been created !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        //
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        $ticket->delete();
        return redirect('/tickets')->with('status', 'The ticket' . $slug . 'has been deleted');
    }
}
