<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Secondary;
use App\Elementary;
use App\College;
use App\GraduateStudy;

class GraduateStudyController extends Controller
{
    public function index(){

        $graduate_studies = GraduateStudy::where('user_id','=',Auth::user()->id)->get();
        $college = College::where('user_id','=',Auth::user()->id)->first();
        $secondary = Secondary::where('user_id','=',Auth::user()->id)->first();
        $elementary = Elementary::where('user_id','=',Auth::user()->id)->first();
        return view('educational-background.index')->
        with('graduate_studies', $graduate_studies)->
        with('elementary', $elementary)->
        with('secondary', $secondary)->
        with('college', $college);

        // $user = User::where('id', Auth::user()->id)->with('elementary', 'secondary', 'college', 'graduate_studies')->get();
        // return view('educational-background.index')->
        // with('user', $user);

    }

    public function create(){

        return view('graduate-study.create');

    }

    public function store(Request $request){

        $graduate_study = new GraduateStudy();

        $graduate_study->user_id = auth()->id();
        $graduate_study->name_of_school = $request->input('name_of_school');
        // $graduate_study->period_date_from = $request->input('period_date_from');
        // $graduate_study->period_date_to = $request->input('period_date_to');
        $graduate_study->level_units_earned = $request->input('level_units_earned');
        $graduate_study->graduated_date_from = $request->input('graduated_date_from');
        $graduate_study->graduated_date_to = $request->input('graduated_date_to');
        $graduate_study->degree = $request->input('degree');
        $graduate_study->course = $request->input('course');
        $graduate_study->academic_reward = $request->input('academic_reward');


        $graduate_study->save();

        return redirect()->route('graduate_study.index')->with('message', "You're data added successfully!");

    }
    
    public function edit($id){

        $graduate_study = GraduateStudy::where('id','=',$id)->first();
        return view('graduate-study.edit')->with('graduate_study', $graduate_study);

    }

    public function update(Request $request, $id){

        $graduate_study = GraduateStudy::where('user_id','=',Auth::user()->id)->first();

        $graduate_study->user_id = auth()->id();
        $graduate_study->name_of_school = $request->input('name_of_school');
        // $graduate_study->period_date_from = $request->input('period_date_from');
        // $graduate_study->period_date_to = $request->input('period_date_to');
        $graduate_study->level_units_earned = $request->input('level_units_earned');
        $graduate_study->graduated_date_from = $request->input('graduated_date_from');
        $graduate_study->graduated_date_to = $request->input('graduated_date_to');
        $graduate_study->degree = $request->input('degree');
        $graduate_study->course = $request->input('course');
        $graduate_study->academic_reward = $request->input('academic_reward');


        $graduate_study->update();


        return redirect()->route('graduate_study.index')->with('message', "You're data updated successfully!");

    }

    public function delete($id){

        $graduate_study = GraduateStudy::findOrFail($id);
        $graduate_study->delete();
        return redirect()->route('secondary.index')->with('delete', "You're data updated successfully!");

    }
}
