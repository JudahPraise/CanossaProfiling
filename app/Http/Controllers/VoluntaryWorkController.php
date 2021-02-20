<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\VoluntaryWork;

class VoluntaryWorkController extends Controller
{
    public function index(){

        $users = User::where('id', Auth::user()->id)->with('voluntary_works')->first();
        // dd($users);
        return view('voluntary-works.index')->with('users', $users);

    }

    public function create(){

        return view('voluntary-works.create');

    }

    public function store(Request $request){

        $voluntary = new VoluntaryWork();

        $voluntary->user_id = auth()->id();
        $voluntary->name_address = $request->input('name_address');
        $voluntary->date_from = $request->input('date_from');
        $voluntary->date_to = $request->input('date_to');
        $voluntary->no_hours = $request->input('no_hours');
        $voluntary->position = $request->input('position');

        $voluntary->save();

        return redirect()->route('voluntary.index')->with('message', "You're data added successfully!");

    }

    public function edit($id){
        
        $voluntary = VoluntaryWork::where('id','=',$id)->first();
        return view('voluntary-works.edit')->with('voluntary', $voluntary);
    }

    public function update(Request $request, $id){

        $voluntary = VoluntaryWork::where('user_id','=',Auth::user()->id)->first();

        $voluntary->user_id = auth()->id();
        $voluntary->name_address = $request->input('name_address');
        $voluntary->date_from = $request->input('date_from');
        $voluntary->date_to = $request->input('date_to');
        $voluntary->no_hours = $request->input('no_hours');
        $voluntary->position = $request->input('position');

        $voluntary->update();
        return redirect()->route('voluntary.index', compact('voluntary', $voluntary))->with('message', "You're data updated successfully!");

    }

    public function delete($id){

        $voluntary = VoluntaryWork::where('id','=',$id)->first();
        $voluntary->delete($voluntary);
        return redirect()->route('voluntary.index', compact('voluntary', $voluntary))->with('delete', "You're data updated successfully!");

    }
}
