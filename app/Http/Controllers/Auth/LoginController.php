<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    //protected $redirectTo = '/home';
    
    public function redirectTo() 
    {
        if(\Auth::user()->hasRole('admin')){
            return ('home');
            //return route('admin'); 
        }

        else if(\Auth::user()->hasRole('enseignant')){
            return ('home');
            //return route('enseignant'); 
        }

        else if(\Auth::user()->hasRole('etudiant')){
            return ('home');
            //return route('etudiant'); 
        }

        else if(\Auth::user()->hasRole('visiteur')){
            return ('home');
            //return route('etudiant'); 
        }
        else
        {
            return route('home'); 
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
    
}
