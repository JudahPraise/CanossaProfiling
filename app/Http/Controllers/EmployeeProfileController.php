<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Employee;
use App\User;   
use Illuminate\Support\Facades\Auth;


class EmployeeProfileController extends Controller
{

    public function index(){
        
        $user = User::where('id', Auth::user()->id)->with('documents', 'employee')->first();
        return view('user-profile.profile')->with('user', $user);

    }

    public function create(){
        return view('user-profile.create-profile');

    }

    public function store(Request $request){
        
        $user = User::where('id','=',Auth::user()->id)->update([
            'verified' => $request->input('verified')
        ]);

        $employee = new Employee();
        $employee->user_id = auth()->id();
        $employee->employee_id = $request->input('employee_id');
        $employee->firstname = $request->input('firstname');
        $employee->lastname = $request->input('lastname');
        $employee->middlename = $request->input('middlename');
        $employee->department = $request->input('department');
        $employee->position = $request->input('position');  

        $employee->save();

        return redirect()->route('personal.create');

    }

    public function edit(){

        $user = User::where('id', Auth::user()->id)->with('documents', 'employee')->first();
        return view('user-profile.update-profile', compact('user'));

    }

    public function update(Request $request, $id){
        
        $employee = Employee::find($id);

        $employee->employee_id = $request->input('employee_id');
        $employee->firstname = $request->input('firstname');
        $employee->lastname = $request->input('lastname');
        $employee->middlename = $request->input('middlename');
        $employee->department = $request->input('department');
        $employee->position = $request->input('position');  

        $employee->update();

        return redirect()->route('profile.index', compact('employee', $employee))->with('message', 'Profile Updated Successfully!');

    }
}
