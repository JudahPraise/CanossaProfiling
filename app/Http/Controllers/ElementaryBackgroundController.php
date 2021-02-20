<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Elementary;
use App\Secondary;
use App\College;
use App\User;
use App\GraduateStudy;

class ElementaryBackgroundController extends Controller
{
    public function index(){

        $elementary = Elementary::where('user_id','=',Auth::user()->id)->first();
        $secondary = Secondary::where('user_id','=',Auth::user()->id)->first();
        $college = College::where('user_id','=',Auth::user()->id)->first();
        $graduate_studies = GraduateStudy::where('user_id','=',Auth::user()->id)->get();
        return view('educational-background.index')->
        with('elementary', $elementary)->
        with('secondary', $secondary)->
        with('college', $college)->
        with('graduate_studies', $graduate_studies);

    }

    public function create(){

        return view('elementary.create');
    }

    public function store(Request $request){

        $elementary = new Elementary();

        $elementary->user_id = auth()->id();
        $elementary->name_of_school = $request->input('name_of_school');
        // $elementary->period_date_from = $request->input('period_date_from');
        // $elementary->period_date_to = $request->input('period_date_to');
        $elementary->level_units_earned = $request->input('level_units_earned');
        $elementary->graduated_date_from = $request->input('graduated_date_from');
        $elementary->graduated_date_to = $request->input('graduated_date_to');
        $elementary->academic_reward = $request->input('academic_reward');
        


        $elementary->save();


        return redirect()->route('elementary.index')->with('message', "You're data added successfully!");

    }
    
    public function edit(){

        $elementary = Elementary::where('user_id','=',Auth::user()->id)->first();
        return view('elementary.edit')->with('elementary', $elementary);
    }

    public function update(Request $request, $id){

        $elementary = Elementary::where('user_id','=',Auth::user()->id)->first();

        $elementary->user_id = auth()->id();
        $elementary->name_of_school = $request->input('name_of_school');
        // $elementary->period_date_from = $request->input('period_date_from');
        // $elementary->period_date_to = $request->input('period_date_to');
        $elementary->level_units_earned = $request->input('level_units_earned');
        $elementary->graduated_date_from = $request->input('graduated_date_from');
        $elementary->graduated_date_to = $request->input('graduated_date_to');
        $elementary->academic_reward = $request->input('academic_reward');


        $elementary->update();


        return redirect()->route('elementary.index')->with('message', "You're data updated successfully!");

    }

    public function delete(Elementary $elementary){

        $elementary->delete($elementary->id);
        return redirect()->route('elementary.index')->with('delete', "You're data updated successfully!");

    }

}
