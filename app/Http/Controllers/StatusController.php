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


}
