<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Employee;
use App\User;
use App\Document;
use App\Announcement;



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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {

        if(Gate::denies('has-employee'))
        {
            $user = User::where('id', Auth::user()->id)->with('documents', 'employee')->first();
            return view('user-profile.fresh-start')->with('user', $user)->with('message', 'Youre Logged In');
        }
        $user = User::where('id', Auth::user()->id)->with('documents', 'employee')->first();
        return view('user-profile.profile')->with('user', $user)->with('message', 'Youre Logged In');

    }
}
