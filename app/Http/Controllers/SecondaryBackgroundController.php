<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Secondary;
use App\Elementary;
use App\User;
use App\College;
use App\GraduateStudy;

class SecondaryBackgroundController extends Controller
{
    public function index(){

        $secondary = Secondary::where('user_id','=',Auth::user()->id)->first();
        $elementary = Elementary::where('user_id','=',Auth::user()->id)->first();
        $college = College::where('user_id','=',Auth::user()->id)->first();
        $graduate_studies = GraduateStudy::where('user_id','=',Auth::user()->id)->get();
        return view('educational-background.index')->
        with('secondary', $secondary)->
        with('elementary', $elementary)->
        with('college', $college)->
        with('graduate_studies', $graduate_studies);

    }

    public function create(){

        return view('secondary.create');
    }

    public function store(Request $request){

        $secondary = new Secondary();

        $secondary->user_id = auth()->id();
        $secondary->name_of_school = $request->input('name_of_school');
        // $secondary->period_date_from = $request->input('period_date_from');
        // $secondary->period_date_to = $request->input('period_date_to');
        $secondary->level_units_earned = $request->input('level_units_earned');
        $secondary->graduated_date_from = $request->input('graduated_date_from');
        $secondary->graduated_date_to = $request->input('graduated_date_to');
        $secondary->academic_reward = $request->input('academic_reward');


        $secondary->save();


        return redirect()->route('secondary.index')->with('message', "You're data added successfully!");

    }
    
    public function edit(){

        $secondary= Secondary::where('user_id','=',Auth::user()->id)->first();
        return view('secondary.edit')->with('secondary', $secondary);
    }

    public function update(Request $request, $id){

        $secondary = Secondary::where('user_id','=',Auth::user()->id)->first();

        $secondary->user_id = auth()->id();
        $secondary->name_of_school = $request->input('name_of_school');
        // $secondary->period_date_from = $request->input('period_date_from');
        // $secondary->period_date_to = $request->input('period_date_to');
        $secondary->level_units_earned = $request->input('level_units_earned');
        $secondary->graduated_date_from = $request->input('graduated_date_from');
        $secondary->graduated_date_to = $request->input('graduated_date_to');
        $secondary->academic_reward = $request->input('academic_reward');


        $secondary->update();


        return redirect()->route('secondary.index')->with('message', "You're data updated successfully!");

    }

    public function delete(Secondary $secondary){

        $secondary->delete($secondary->id);
        return redirect()->route('secondary.index')->with('delete', "You're data updated successfully!");

    }
}
