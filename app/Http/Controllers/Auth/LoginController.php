<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
// use Illuminate\Http\Client\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Exceptions\UnauthorizedException;


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
    // protected $redirectTo = '/';

    public function redirectTo(){
    
        try {
            
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
                elseif(Auth::user()->hasRole('Specialist')){
                    return '/specialist/dashboard';
                }
                elseif(Auth::user()->hasRole('Generalist_comercial')){
                    return '/generalistcomercial/dashboard';
                }
                
            
        } catch (UnauthorizedException $e) {
            Auth::logout();
            return redirect()->route('login')->with('error', 'Se ha cerrado la sesión debido a un error.');
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

    // Sobrescribe el método credentials para agregar tipo de usuario
    protected function credentials(Request $request)
    {
        return [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'type' => 'web' // Tipo de usuario (web o api)
        ];
    }


    protected function loggedOut() {
        return redirect('/login');
    }
}
