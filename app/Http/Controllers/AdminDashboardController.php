<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function index(){

        $employeeCount = Employee::count();
        $teacherCount = Employee::where('position', 'LIKE', "teacher")->count();
        $staffCount = Employee::where('position', 'LIKE', "staff")->count();
        $maintenanceCount = Employee::where('position', 'LIKE', "maintenance")->count();
        $employees = Employee::all();
        // dd($users);
        return view('filter-tables.table-employees')->with('employeeCount', $employeeCount)
                                      ->with('teacherCount', $teacherCount)
                                      ->with('staffCount', $staffCount)
                                      ->with('maintenanceCount', $maintenanceCount)
                                      ->with(compact('employees', $employees));
    }

    public function teacherFilter(){
        $employeeCount = Employee::count();
        $teacherCount = Employee::where('position', 'LIKE', "teacher")->count();
        $staffCount = Employee::where('position', 'LIKE', "staff")->count();
        $maintenanceCount = Employee::where('position', 'LIKE', "maintenance")->count();
        $teachers = Employee::where('position', 'LIKE', "teacher")->get();
        // dd($users);
        return view('filter-tables.table-teachers')->with('employeeCount', $employeeCount)
                                      ->with('teacherCount', $teacherCount)
                                      ->with('staffCount', $staffCount)
                                      ->with('maintenanceCount', $maintenanceCount)
                                      ->with(compact('teachers', $teachers));
    }

    public function staffFilter(){
        $employeeCount = Employee::count();
        $teacherCount = Employee::where('position', 'LIKE', "teacher")->count();
        $staffCount = Employee::where('position', 'LIKE', "staff")->count();
        $maintenanceCount = Employee::where('position', 'LIKE', "maintenance")->count();
        $staffs = Employee::where('position', 'LIKE', "staff")->get();
        // dd($users);
        return view('filter-tables.table-staffs')->with('employeeCount', $employeeCount)
                                      ->with('teacherCount', $teacherCount)
                                      ->with('staffCount', $staffCount)
                                      ->with('maintenanceCount', $maintenanceCount)
                                      ->with(compact('staffs', $staffs));
    }

    public function maintenanceFilter(){
        $employeeCount = Employee::count();
        $teacherCount = Employee::where('position', 'LIKE', "teacher")->count();
        $staffCount = Employee::where('position', 'LIKE', "staff")->count();
        $maintenanceCount = Employee::where('position', 'LIKE', "maintenance")->count();
        $maintenance = Employee::where('position', 'LIKE', "maintenance")->get();
        // dd($users);
        return view('filter-tables.table-maintenance')->with('employeeCount', $employeeCount)
                                      ->with('teacherCount', $teacherCount)
                                      ->with('staffCount', $staffCount)
                                      ->with('maintenanceCount', $maintenanceCount)
                                      ->with(compact('maintenance', $maintenance));
    }
}
