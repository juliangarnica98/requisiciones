<?php

namespace App\Http\Controllers\specialist;

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
        $last_name = auth()->user()->last_name;
        return view('specialist',compact('user_name','last_name'));
    }
}
