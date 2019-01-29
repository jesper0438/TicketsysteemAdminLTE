<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;
use App\Auth;

class StatusController extends Controller
{
      public function __construct()
     {
         $this->middleware('auth');
     }

    public function index() {
          return view('statuses/index', [
            'statuses' => Status::orderBy('id', 'asc')->get(),
            ]);
        }
          
    

    public function create() {
    	return view('statuses/create');
    }

    public function store(Request $request) {

        $this->validate($request, [
                'name' => 'required|max:255|unique:statuses',
                'description' => 'required|max:200',
        ]);

         $status = Status::create([
            'name' => $request ['name'],
            'description' => $request ['description'],

        ]);
        // Save this object in the database
        $status->save();
        // Redirect to the employee.index page with a success message.
        return redirect('statuses');
    }

       public function edit($id) {

        return view('statuses/edit' [
            'statuses' => Status::findOrFail($id),
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
        ]);
        $status = Status::findorfail($id);
        $status->name = $request ['name'];
        $status->description = $request ['description'];
        
        // Save the changes in the database
        $status->save();
      
        return redirect('statuses')->with('success', $status->name . ' has been updated.');
    }

}
