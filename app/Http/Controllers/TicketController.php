<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Ticket;

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
        $tickets = Ticket::latest()->paginate(6);
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
            'title' => 'required|min:4',
            'location' => 'required|min:5',
            'description' => 'required|min:10',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        /*saving an image_*/
        $image = $request->file('image');
        $imageName = time() . '.' . $request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $imageName);

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
        //
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        /**this code display all the comments created */
        $comments = $ticket->comments()->get();

        return view('tickets.show',compact('ticket','comments'));
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
    public function update(Request $request, $id)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
