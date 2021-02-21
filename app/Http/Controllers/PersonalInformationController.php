<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\PersonalInformation;
use App\User;

class PersonalInformationController extends Controller
{
    public function index(){

        $personal = PersonalInformation::where('user_id','=',Auth::user()->id)->first();
        return view('personal-information.index', compact('personal', $personal));

    }

    public function create(){
        return view('personal-information.create');
    }


    public function store(Request $request){

        $personal = new PersonalInformation();

        $personal->user_id = auth()->id();
        $personal->first_name = $request->input('first_name');
        $personal->middle_name = $request->input('middle_name');
        $personal->surname = $request->input('surname');
        $personal->date_of_birth = $request->input('date_of_birth');
        $personal->sex = $request->input('sex');
        $personal->citizenship = $request->input('citizenship');
        $personal->civil_status = $request->input('civil_status');
        $personal->height = $request->input('height');
        $personal->weight = $request->input('weight');
        $personal->blood_type = $request->input('blood_type');
        $personal->address = $request->input('address');
        $personal->zip_code = $request->input('zip_code');
        $personal->tel_number = $request->input('tel_number');
        $personal->cell_number = $request->input('cell_number');
        $personal->email_address = $request->input('email_address');
        $personal->prc = $request->input('prc');
        $personal->gsis = $request->input('gsis');
        $personal->sss = $request->input('sss');
        $personal->pag_ibig = $request->input('pag_ibig');
        $personal->driver_license = $request->input('driver_license');
        $personal->phil_health = $request->input('phil_health');

        $personal->save();


        return redirect()->route('personal.edit')->with('success', 'Data added successfully!');

    }

    public function edit($id){

        $personal= PersonalInformation::where('id','=',$id)->first();
        return view('personal-information.edit')->with('personal', $personal);

    }

    public function update(Request $request, $id){

        $personal = PersonalInformation::where('id','=',$id)->first();

        $personal->user_id = auth()->id();
        $personal->first_name = $request->input('first_name');
        $personal->middle_name = $request->input('middle_name');
        $personal->surname = $request->input('surname');
        $personal->date_of_birth = $request->input('date_of_birth');
        $personal->sex = $request->input('sex');
        $personal->citizenship = $request->input('citizenship');
        $personal->civil_status = $request->input('civil_status');
        $personal->height = $request->input('height');
        $personal->weight = $request->input('weight');
        $personal->blood_type = $request->input('blood_type');
        $personal->address = $request->input('address');
        $personal->zip_code = $request->input('zip_code');
        $personal->tel_number = $request->input('tel_number');
        $personal->cell_number = $request->input('cell_number');
        $personal->email_address = $request->input('email_address');
        $personal->prc = $request->input('prc');
        $personal->gsis = $request->input('gsis');
        $personal->sss = $request->input('sss');
        $personal->pag_ibig = $request->input('pag_ibig');
        $personal->driver_license = $request->input('driver_license');
        $personal->phil_health = $request->input('phil_health');


        $personal->update();


        return redirect()->back()->with('success', 'Data updated successfully!');

    }

}
