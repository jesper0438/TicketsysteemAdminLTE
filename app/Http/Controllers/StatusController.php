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
      return view('statuses/index');
          
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

}
