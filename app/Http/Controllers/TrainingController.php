<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Training;
use App\User;

class TrainingController extends Controller
{
    public function index(){

        $user = User::where('id', Auth::user()->id)->with('trainings')->first();
        return view('training.index', compact('user', $user));

    }

    public function create(){

        return view('training.create');

    }

    public function store(Request $request){
        
        $training = new Training();

        $training->user_id = auth()->id();
        $training->training_date = $request->input('training_date');
        $training->training_title = $request->input('training_title');
        $training->training_sponsor = $request->input('training_sponsor');

        if($request->hasFile('training_certificate')){

            $file =$request->file('training_certificate');
            $filename = $file->getClientOriginalName();
            $request->training_certificate->storeAs('certificates', $filename, 'public');
            $training->training_certificate = $filename;
           
        }
        // dd($training);
        $training->save();

        return redirect()->route('training.index');

    }

    public function edit($id){
        
        $training = Training::where('id','=',$id)->first();
        return view('training.edit')->with('training', $training);
    }

    public function update(Request $request, $id){
        
        $training = Training::where('user_id','=',Auth::user()->id)->first();

        $training->user_id = auth()->id();
        $training->training_date = $request->input('training_date');
        $training->training_title = $request->input('training_title');
        $training->training_sponsor = $request->input('training_sponsor');

        if($request->hasFile('training_certificate')){

            $file =$request->file('training_certificate');
            $filename = $file->getClientOriginalName();
            $request->training_certificate->storeAs('certificates', $filename, 'public');
            $training->training_certificate = $filename;
           
        }
        // dd($training);
        $training->update();

        return redirect()->route('training.index');

    }

    public function delete($id){

        $training = Training::where('id','=',$id)->first();
        $training->delete($training);
        return redirect()->route('training.index');

    }

    public function download($id){
        $training = Training::where('id','=',$id)->first();
        return response()->download(storage_path("app/public/certificates/{$training->training_certificate}"));
    }
    
}
