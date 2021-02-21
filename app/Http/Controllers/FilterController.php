<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalInformation;
use Carbon\Carbon;
use App\User;
use App\GraduateStudy;
 
class FilterController extends Controller
{
    public function filterPersonal(){

        $employees = PersonalInformation::all();
        return view('filter-search.filter-personal', compact('employees'));

    }

    public function filterStudies(){

        $employees = GraduateStudy::all();
        return view('filter-search.filter-studies', compact('employees'));

    }
}
