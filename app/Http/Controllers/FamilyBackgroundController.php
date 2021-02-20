<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\FamilyBackground;
use App\User;
use App\Children;

class FamilyBackgroundController extends Controller
{

    public function index(){
        
        $family_background = FamilyBackground::where('user_id','=',Auth::user()->id)->with('children')->first();
        return view('family-background.children-index')->with('family_background', $family_background);

    }
    
    public function create(){

        return view('family-background.create');

    }

    public function store(Request $request){

        $family = FamilyBackground::create([

            'user_id' => auth()->id(),
            'spouse_surname' => $request->input('spouse_surname'),
            'spouse_firstname' => $request->input('spouse_firstname'),
            'spouse_middlename' => $request->input('spouse_middlename'),
            'spouse_occupation' => $request->input('spouse_occupation'),
            'spouse_employer_business_name' => $request->input('spouse_employer_business_name'),
            'spouse_business_address' => $request->input('spouse_business_address'),
            'spouse_tel_no' => $request->input('spouse_tel_no'),

            'father_surname' => $request->input('father_surname'),
            'father_firstname' => $request->input('father_firstname'),
            'father_middlename' => $request->input('father_middlename'),
            'father_occupation' => $request->input('father_occupation'),
            'father_employer_business_name' => $request->input('father_employer_business_name'),
            'father_business_address' => $request->input('father_business_address'),
            'father_tel_no' => $request->input('father_tel_no'),

            'mother_surname' => $request->input('mother_surname'),
            'mother_firstname' => $request->input('mother_firstname'),
            'mother_middlename' => $request->input('mother_middlename'),
            'mother_occupation' => $request->input('mother_occupation'),
            'mother_employer_business_name' => $request->input('mother_employer_business_name'),
            'mother_business_address' => $request->input('mother_business_address'),
            'mother_tel_no' => $request->input('mother_tel_no'),
            
        ]);

        $family->save();

        return redirect()->route('family.index')->with('message', 'Data updated successfully!');
    }

    public function edit($id){

        $family_background = FamilyBackground::where('id','=',$id)->first();
        return view('family-background.edit')->with('family_background', $family_background);
        
    }

    public function update(Request $request, $id){

        $family = FamilyBackground::where('user_id','=',Auth::user()->id)->first()->update([

            'spouse_surname' => $request->input('spouse_surname'),
            'spouse_firstname' => $request->input('spouse_firstname'),
            'spouse_middlename' => $request->input('spouse_middlename'),
            'spouse_occupation' => $request->input('spouse_occupation'),
            'spouse_employer_business_name' => $request->input('spouse_employer_business_name'),
            'spouse_business_address' => $request->input('spouse_business_address'),
            'spouse_tel_no' => $request->input('spouse_tel_no'),

            'father_surname' => $request->input('father_surname'),
            'father_firstname' => $request->input('father_firstname'),
            'father_middlename' => $request->input('father_middlename'),
            'father_occupation' => $request->input('father_occupation'),
            'father_employer_business_name' => $request->input('father_employer_business_name'),
            'father_business_address' => $request->input('father_business_address'),
            'father_tel_no' => $request->input('father_tel_no'),

            'mother_surname' => $request->input('mother_surname'),
            'mother_firstname' => $request->input('mother_firstname'),
            'mother_middlename' => $request->input('mother_middlename'),
            'mother_occupation' => $request->input('mother_occupation'),
            'mother_employer_business_name' => $request->input('mother_employer_business_name'),
            'mother_business_address' => $request->input('mother_business_address'),
            'mother_tel_no' => $request->input('mother_tel_no'),
            
        ]);

        return redirect()->route('family.index')->with('message', 'Data updated successfully!');
    }
    
}
