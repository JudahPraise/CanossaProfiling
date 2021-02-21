<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Notification;
use App\Notifications\MessageNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use File;
use App\UserMessages;
use App\AdminMessage;
use App\Admin;
use App\Employee;

class UserMessage extends Controller
{
    public function index(){
        $messages = UserMessages::where('send_to','=',Auth::user()->employee->employee_id)->orWhere('send_to_all','=',Auth::user()->employee->department)->orWhere('send_to_all','=','All')->orderBy('created_at', 'desc')->get();
        return view('user-message.messages', compact('messages'));
    }

    public function createMessage(){

        return view('user-message.compose');
    }

    public function sendMessage(Request $request){

        $message = new UserMessages();

        $employee = Employee::where('user_id','=',Auth::user()->id)->first();

        $message->sender = $employee->employee_id;
        $message->send_to = 'Admin';
        $message->message = $request->input('message');
        $message->link = $request->input('link');

        if($request->hasFile('file')){

            $file =$request->file('file');
            $filename = $file->getClientOriginalName();
            $request->file->storeAs('user_send_files', $filename, 'public');
            $message->file = $filename;
           
        }

        $message->save();

        $AdminMessage = new AdminMessage();

        $employee = Employee::where('user_id','=',Auth::user()->id)->first();

        $AdminMessage->sender = $employee->employee_id;
        $AdminMessage->send_to = 'Admin';
        $AdminMessage->message = $request->input('message');
        $AdminMessage->link = $request->input('link');

        if($request->hasFile('file')){

            $file =$request->file('file');
            $filename = $file->getClientOriginalName();
            $request->file->storeAs('admin_send_files', $filename, 'public');
            $AdminMessage->file = $filename;
           
        }

        $AdminMessage->save();

        if($request->send_to = 'Admin')
       {
            $admin = Admin::all();
       }

       Notification::send($admin, new MessageNotification(UserMessages::latest('id')->first()));

        return redirect()->route('user-message.index')->with('message', 'Message sent!');

    }

    public function sent(){
        $employee = Employee::where('user_id','=',Auth::user()->id)->first();
        $messages = UserMessages::where('sender','=',$employee->employee_id)->orderBy('created_at', 'desc')->get();
        return view('user-message.outbox', compact('messages'));
    }

    public function delete($id){

        $message = UserMessages::where('id','=',$id)->first();
        File::delete(public_path('storage/user_send_files/'.$message->file));
        $message->delete($message);
        return redirect()->route('user-message.index')->with('delete', 'Message deleted!');

    }

    public function download($id){

        $file = UserMessages::where('id','=',$id)->first();
        return response()->download(storage_path("app/public/documents/{$file->file}"));

    }

    public function markAsRead($id){
        
        UserMessages::where('id','=',$id)->update([
            'read' => 'read',
        ]);

        return redirect()->back();

    }

    public function reply($sender){

        $sender = Admin::where('job_title','=',$sender)->first();
        return view('user-message.reply', compact('sender'));

    }
}
