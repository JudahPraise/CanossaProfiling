<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Employee;

class RegisterController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('register-employee.index', compact('employees', $employees));
    }

    public function create()
    {
        return view('auth.register');
    }
}
