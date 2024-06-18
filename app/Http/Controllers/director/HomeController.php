<?php

namespace App\Http\Controllers\director;

use App\Http\Controllers\Controller;
use App\Models\User;
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
        $usuario =  User::where('id',auth()->id())->first();
        $area = $usuario->area;
        dd($area);
        return view('director',compact('user_name','last_name','area'));
    }
}
