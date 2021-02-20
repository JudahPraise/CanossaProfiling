<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Secondary;
use App\Elementary;
use App\College;
use App\GraduateStudy;

class CollegeBackgroundController extends Controller
{
    public function index(){

        $college = College::where('user_id','=',Auth::user()->id)->first();
        $graduate_studies = GraduateStudy::where('user_id','=',Auth::user()->id)->get();
        $secondary = Secondary::where('user_id','=',Auth::user()->id)->first();
        $elementary = Elementary::where('user_id','=',Auth::user()->id)->first();
        return view('educational-background.index')->
        with('college', $college)->
        with('elementary', $elementary)->
        with('secondary', $secondary)->
        with('graduate_studies', $graduate_studies);

    }

    public function create(){

        return view('college.create');

    }

    public function store(Request $request){

        $college = new College();

        $college->user_id = auth()->id();
        $college->name_of_school = $request->input('name_of_school');
        // $college->period_date_from = $request->input('period_date_from');
        // $college->period_date_to = $request->input('period_date_to');
        $college->level_units_earned = $request->input('level_units_earned');
        $college->graduated_date_from = $request->input('graduated_date_from');
        $college->graduated_date_to = $request->input('graduated_date_to');
        $college->course_degree = $request->input('course_degree');
        $college->academic_reward = $request->input('academic_reward');


        $college->save();

        return redirect()->route('college.index')->with('message', "You're data added successfully!");

    }
    
    public function edit(){

        $college= College::where('user_id','=',Auth::user()->id)->first();
        return view('college.edit')->with('college', $college);

    }

    public function update(Request $request, $id){

        $college = college::where('user_id','=',Auth::user()->id)->first();

        $college->user_id = auth()->id();
        $college->name_of_school = $request->input('name_of_school');
        // $college->period_date_from = $request->input('period_date_from');
        // $college->period_date_to = $request->input('period_date_to');
        $college->level_units_earned = $request->input('level_units_earned');
        $college->graduated_date_from = $request->input('graduated_date_from');
        $college->graduated_date_to = $request->input('graduated_date_to');
        $college->course_degree = $request->input('course_degree');
        $college->academic_reward = $request->input('academic_reward');


        $college->update();


        return redirect()->route('college.index')->with('message', "You're data updated successfully!");

    }

    public function delete(College $college){

        $college->delete($college->id);
        return redirect()->route('secondary.index')->with('delete', "You're data updated successfully!");

    }
}
