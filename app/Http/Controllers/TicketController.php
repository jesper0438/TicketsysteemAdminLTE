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
            'device' => 'required',
            'status' => 'required',
        
        ]);
        // Create new employee object with the info in the request
        $ticket = Ticket::create([
            'name' => $request ['name'],
            'description' => $request ['description'],
            'category' => $request ['category'],
            'user' => $request ['user'],
            'device' => $request ['device'],
            'status' => $request ['status'],
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

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Check if the form was correctly filled in
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'category' => 'required',
            'user' => 'required',
            'device' => 'required',
            'status' => 'required',

        ]);
        $ticket = Ticket::findorfail($id);
        $ticket->name = $request ['name'];
        $ticket->description = $request ['description'];
        $ticket->category = $request ['category'];
        $ticket->user = $request ['user'];
        $ticket->device = $request ['device'];
        $ticket->description = $request ['description'];

        // Save the changes in the database
        $ticket->save();
      
        return redirect('tickets')->with('success', $ticket->name . ' has been updated.');
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
