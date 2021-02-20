<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Children;
use App\FamilyBackground;

class ChildrenController extends Controller
{
    public function store(Request $request){

        $family = FamilyBackground::where('user_id','=',Auth::user()->id)->first();

        $child = new Children();
        $child->user_id = Auth::user()->id;
        $child->family_id = $family->id;
        $child->name = $request->input('name');
        $child->date_of_birth = $request->input('date_of_birth');

        $child->save();

        return redirect()->route('family.index')->with('message', 'Data updated successfully!');


    }

    public function edit($id){
        $family_background = FamilyBackground::where('user_id','=',Auth::user()->id)->with('children')->first();
        $child = Children::where('id','=',$id)->first();
        return view('family-background.child-edit')->with('family_background', $family_background)->with('child', $child);
    }

    public function update(Request $request, $id){

        $family = FamilyBackground::where('user_id','=',Auth::user()->id)->first();

        $child = $child = Children::where('id','=',$id)->first();
        $child->family_id = $family->id;
        $child->name = $request->input('name');
        $child->date_of_birth = $request->input('date_of_birth');

        $child->update();

        return redirect()->route('family.index')->with('message', 'Data updated successfully!');


    }
}
