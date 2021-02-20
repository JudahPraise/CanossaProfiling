<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Employee;
use App\User;

class EducationalBackgroundController extends Controller
{
    public function index(){
       
        return view('educational-background.index');

    }
}
