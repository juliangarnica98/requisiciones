<?php

namespace App\Http\Controllers\generalist;

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
        return view('generalist',compact('user_name'));
    }
}
