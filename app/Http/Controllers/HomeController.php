<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(\Auth::user()->hasRole('admin')){
            return view('admin.home');
        }

        else if(\Auth::user()->hasRole('enseignant')){
            return view('enseignant.accueille'); 
        }

        else if(\Auth::user()->hasRole('etudiant')){
            return view('etudiant.home'); 
        }

        else if(\Auth::user()->hasRole('visiteur')){
            return view('visiteur.home');
        }
        else
        {
           $request->user()->authorizeRoles([
            'admin',
            'enseignant',
            'etudiant',
            'visiteur'
            ]);

            return view('home');
        }
        
    }
}
