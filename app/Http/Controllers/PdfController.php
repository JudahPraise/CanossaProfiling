<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
use App\User;


class PdfController extends Controller
{
    public function index(){

        // $employee = Employee::where('user_id','=',Auth::user()->id)->first();
        // $users = User::where('id', Auth::user()->id)->with('experiences')->first();
        // $user = Auth::user()->with('employee', 'experiences', 'elementary', 'secondary', 'college', 'graduate_studies')->first();
        // $user = Auth::user()->with('employee', 'experiences', 'elementary', 'secondary', 'college', 'graduate_studies')->get();
        // dd($user);
        $user = User::where('id', Auth::user()->id)->with('personal', 'employee', 'experiences', 'elementary', 'secondary', 'college', 'graduate_studies')->first();
        // dd($user);
        return view('pdf.profile')->with('user', $user);

    }
    
}
