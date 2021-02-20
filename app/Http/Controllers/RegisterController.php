<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class RegisterController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('register-employee.index', compact('users', $users));
    }

    public function create()
    {
        return view('auth.register');
    }
}
