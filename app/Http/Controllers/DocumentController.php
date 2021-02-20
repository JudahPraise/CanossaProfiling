<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Document;
use File;

class DocumentController extends Controller
{

    public function store(Request $request){
        
        $document = new Document();

        $document->user_id = auth()->id();
        $document->type_document = $request->input('type_document');
        if($request->hasFile('document_filename')){

            $file = $request->file('document_filename');
            $filename = $file->getClientOriginalName();
            $request->document_filename->storeAs('documents', $filename, 'public');
            $document->document_filename = $filename;
           
        }
        $document->save();

        return redirect()->back()->with('message', "{$document->type_document} saved successfully!");

    }

    public function download($id){
        $document = Document::where('id','=',$id)->first();
        return response()->download(storage_path("app/public/documents/{$document->document_filename}"));
    }

    public function delete($id){

        $document = Document::where('id','=',$id)->first();
        $document->delete($document);
        return redirect()->back()->with('delete', "{$document->type_document} has been deleted!");

    }
}
