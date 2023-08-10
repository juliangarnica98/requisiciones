<?php

namespace App\Http\Controllers\boss;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user_name = auth()->user()->name;
        return view('boss',compact('user_name'));

    }

  
}
