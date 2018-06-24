<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Ticket;

class TicketController extends Controller
{
    
 public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {

        return view('tickets/index', [
            'tickets' => Ticket::orderBy('id', 'asc')->get(),
            ]);
        }

     public function create()
    {
        return view('tickets/create');
    }
        /**
     * @param $id
     * @return $this \Illuminate\Http\Response
     */

      public function store(Request $request)
    {
       // Check if the form was correctly filled in
        $this->validate($request, [
            'name' => 'required|max:255|unique:tickets',
            'description' => 'required|max:255|unique:tickets',
            'category' => 'required',
            'user' => 'required',
        
        ]);
        // Create new employee object with the info in the request
        $ticket = Ticket::create([
            'name' => $request ['name'],
            'description' => $request ['description'],
        ]);
        // Save this object in the database
        $ticket->save();
        // Redirect to the employee.index page with a success message.
        return redirect('tickets')->with('success', $ticket->name . ' has been added.');
    }

    public function edit($id)
    {
        return view('tickets/edit', [
            'tickets' => Ticket::findOrFail($id),
        ]);
    }

    public function show($id) 
    {
       
        return view('ticket/show', [
            'ticket' => Ticket::findOrFail($id),
        ]);
    }

       /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */   
    
   
}
