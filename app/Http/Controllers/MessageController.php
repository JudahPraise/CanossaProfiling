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
use App\Employee;

class MessageController extends Controller
{
    public function index(){

        $messages = AdminMessage::where('send_to','=','admin')->orderBy('created_at', 'desc')->get();
        return view('message.inbox', compact('messages'));
    }

    public function sent(){

        $messages = AdminMessage::where('sender','=','admin')->orderBy('created_at', 'desc')->get();
        return view('message.outbox', compact('messages'));
    }

    public function inbox(){

        $messages = AdminMessage::where('send_to','=','admin')->orderBy('created_at', 'desc')->get();
        return view('message.inbox', compact('messages'));

    }

    public function createMessage(){

        return view('message.compose');
    }

    public function messageUser($id){

        $employee = Employee::where('id','=',$id)->first();
        // dd($employee);
        return view('message.inform-user')->with('employee', $employee);

    }

    public function sendMessage(Request $request){

        $message = new AdminMessage();

        $message->sender = "admin";
        $message->send_to = $request->input('send_to');
        $message->send_to_all = $request->input('send_to_all');
        $message->message = $request->input('message');
        $message->link = $request->input('link');

        if($request->hasFile('file')){

            $file =$request->file('file');
            $filename = $file->getClientOriginalName();
            $request->file->storeAs('admin_send_files', $filename, 'public');
            $message->file = $filename;
           
        }

        $message->save();

        $UserMessage = new UserMessages();

        $UserMessage->sender = "admin";
        $UserMessage->send_to = $request->input('send_to');
        $UserMessage->send_to_all = $request->input('send_to_all');
        $UserMessage->message = $request->input('message');
        $UserMessage->link = $request->input('link');

        if($request->hasFile('file')){

            $file =$request->file('file');
            $filename = $file->getClientOriginalName();
            $request->file->storeAs('user_send_files', $filename, 'public');
            $UserMessage->file = $filename;
           
        }

        $UserMessage->save();

        if($request->send_to_all = 'all')
       {
            $employee = Employee::all();
       }
       elseif($request->send_to)
       {
            $employee = Employee::where('employee_id','=',$message->send_to)->get();
       }
       else
       {
            $employee = Employee::where('department','=',$message->send_to_all)->get();
       }

       Notification::send($employee, new MessageNotification(AdminMessage::latest('id')->first()));

        return redirect()->route('message.index')->with('success', 'Message sent!');

    }

    public function delete($id){

        $message = AdminMessage::where('id','=',$id)->first();
        File::delete(public_path('storage/admin_send_files/'.$message->file));
        $message->delete($message);
        return redirect()->route('user-message.index')->with('delete', 'Message deleted!');

    }

    public function download($id){

        $file = AdminMessage::where('id','=',$id)->first();
        return response()->download(storage_path("storage/admin_send_files/{$file->file}"));

    }

    public function reply($sender){

        $sender = Employee::where('employee_id','=',$sender)->first();
        return view('message.reply', compact('sender'));

    }

}
