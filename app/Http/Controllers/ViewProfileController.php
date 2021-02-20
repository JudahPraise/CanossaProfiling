<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ViewProfileController extends Controller
{
    public function viewProfile($id){
        
        $user = User::where('id', $id)->with('employee','personal','experiences','elementary','secondary', 'college', 'graduate_studies', 'trainings', 'documents','voluntary_works','family', 'children')->first();
        return view('admin.view_profile')->with('user', $user);
        
    }
}
