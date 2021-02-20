<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ImageController extends Controller
{
    public function store(Request $request){

        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images', $filename, 'public');
            auth()->user()->update(['image' => $filename]);
        }
        return redirect()->back()->with('message', 'Profile updated successfully');

    }

    public function update(Request $request, $id){

        
            if($request->hasFile('image')){
                
                $image = ImageTable::where('image_id'."=".$id)->first()->update([

                $filename = $request->image->getClientOriginalName(),
                $request->image->storeAs('images', $filename, 'public'),
            
                ]);
            }
        
        return redirect()->back()->with('message', 'Profile updated successfully');

    }

}
