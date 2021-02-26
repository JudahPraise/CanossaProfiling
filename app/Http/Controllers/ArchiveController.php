<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Archive;
use App\Employee;

class ArchiveController extends Controller
{
    public function index(){
        $archives = Archive::all();
        return view('register-employee.archive', compact('archives', $archives));
    }

    public function archive($id){

        Employee::query()
        ->where('id','=',$id)
        ->each(function ($employee) {
          $archived = $employee->replicate();
          $archived->setTable('archives');
          $archived->save();
      
          $employee->delete();
        });

        return redirect()->back();
    }

    public function retrieve($id){

        Archive::query()
        ->where('id','=',$id)
        ->each(function ($archives) {
          $employee = $archives->replicate();
          $employee->setTable('employees');
          $employee->save();
          
          $archives->delete();
        });
        return redirect()->route('archive.index');
    }
}
