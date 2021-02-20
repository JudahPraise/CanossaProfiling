<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminEmployeesController extends Controller
{
    public function index(){

        $employees = Employee::all();
        $verifiedCount = User::where('verified','LIKE','verified')->count();
        $notVerifiedCount = User::where('verified','LIKE','notVerified')->count();
        return view('admin.employees', compact('employees', $employees))->with('verifiedCount', $verifiedCount)->with('notVerifiedCount', $notVerifiedCount);
        
    }

    public function show($id){

        $user = User::with('employee', 'elementary')->get();

    }
}
    