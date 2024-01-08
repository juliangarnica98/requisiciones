<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
// use Illuminate\Http\Client\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectTo(){

        if(Auth::user()->hasRole('Admin')){
            return '/dashboard'; 
        }elseif(Auth::user()->hasRole('Boss')){
            return '/boss/requisiciones';
        }elseif(Auth::user()->hasRole('Director')){
            return '/director/requisiciones';
        }elseif(Auth::user()->hasRole('Recruiter')){
            return '/recruiter/entrevistas';
        }elseif(Auth::user()->hasRole('Generalist')){
            return '/generalist/dashboard';
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function loggedOut() {
        return redirect('/login');
    }
}
