<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\Notification;
use App\Notifications\MessageNotification;
use App\Message;
use App\Admin;
use App\Employee;

class MessageController extends Controller
{
    public function index(){
        $messages = Message::all();
        return view('message.inbox', compact('messages', $messages));
    }

    public function createMessage(){
        return view('message.compose');
    }

    public function store(Request $request){
        
        $message = new Message();   

       if(Auth::guard('admin'))
       {
           $message->sender = "admin";
       }
       else
       {
        $message->sender = Auth::user()->employee->employee_id;
       }
        $message->recipient = $request->input('recipient');
        $message->recipientAll = $request->input('recipientAll');
        $message->message = $request->input('message');
        $message->link = $request->input('link');
        if($request->hasFile('file')){

            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $request->file->storeAs('files', $filename, 'public');
            $message->file = $filename;

        }

        $message->save();

        if($request->recipientAll = 'all')
       {
        $employee = Employee::all();
       }
       elseif($request->recipientAll = 'Elementary'){
        $employee = Employee::where('department','LIKE','Elementary')->get();
       }
       elseif($request->recipientAll = 'Junior High School'){
        $employee = Employee::where('department','LIKE','Junior High School')->get();
       }
       elseif($request->recipientAll = 'Senior High School'){
        $employee = Employee::where('department','LIKE','Senior High School')->get();
       }
       elseif($request->recipientAll = 'College'){
        $employee = Employee::where('department','LIKE','College')->get();
       }
       elseif($request->recipientAll = 'Staff'){
        $employee = Employee::where('position','LIKE','Staff')->get();
       }
       elseif($request->recipientAll = 'Maintenance'){
        $employee = Employee::where('position','LIKE','Maintenance')->get();
       }elseif($request->input('recipient')){
        $employee = Employee::where('employee_id','LIKE',$request->recipient)->first();
       }
        
        Notification::send($employee,new MessageNotification(Message::latest('id')->first()));
        
        return redirect()->route('message.index');
    }
}
