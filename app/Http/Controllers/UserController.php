<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Auth;

class UserController extends Controller
{
  public function __construct()
     {
         $this->middleware('auth');
     }

    public function index() {
      return view('users/index', [
          'users' => User::orderBy('name', 'asc')->get(),
          ]);
    }
}
