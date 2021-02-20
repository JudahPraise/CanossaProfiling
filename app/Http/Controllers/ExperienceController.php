<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Employee;
use App\User;
use App\Experience;

class ExperienceController extends Controller
{

    public function index(){    
        
        // $experiences = Experience::where('user_id','=',Auth::user()->id)->get();
        // return view('work-experience.index')->with('experiences', $experiences);

        $users = User::where('id', Auth::user()->id)->with('experiences')->first();
        // dd($users);
        return view('work-experience.index')->with('users', $users);

    }

    public function create(){

        return view('work-experience.create');

    }

    public function store(Request $request){
        
        $experience = new Experience();

        $experience->user_id = auth()->id();
        $experience->date_from = $request->input('date_from');
        $experience->date_to = $request->input('date_to');
        $experience->work_description = $request->input('work_description');
        $experience->work_place = $request->input('work_place');

        $experience->save();

        return redirect()->route('work.index');

    }

    public function edit($id){
        
        $experience = Experience::where('id','=',$id)->first();
        return view('work-experience.edit')->with('experience', $experience);
    }

    public function update(Request $request, $id){

        $experience = Experience::where('user_id','=',Auth::user()->id)->first();

        $experience->user_id = auth()->id();
        $experience->date_from = $request->input('date_from');
        $experience->date_to = $request->input('date_to');
        $experience->work_description = $request->input('work_description');
        $experience->work_place = $request->input('work_place');

        $experience->update();
        
        return redirect()->route('work.index', compact('experience', $experience));

    }

    public function delete($id){

        $experience = Experience::where('id','=',$id)->first();
        $experience->delete($experience);
        return redirect()->route('work.index', compact('experience', $experience));

    }

}
