<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Notification;
use App\Notifications\AnnouncementNotification;
use Illuminate\Support\Facades\Auth;
use App\Announcement;
use App\User;
use App\Employee;

class AnnouncementController extends Controller
{
    public function index(){

        $announcements = Announcement::orderBy('created_at', 'desc')->get();
        return view('admin-announcement.index', compact('announcements', $announcements));

    }

    public function create(){

        $announcements = Announcement::all();
        return view('admin-announcement.create', compact('announcements', $announcements));

    }

    public function store(Request $request){

        $announcement = new Announcement();
        $announcement->ann_title = $request->input('ann_title');
        $announcement->ann_start = $request->input('ann_start');
        $announcement->ann_end = $request->input('ann_end');
        $announcement->ann_affected = $request->input('ann_affected');
        $announcement->ann_other = $request->input('ann_other');
        $announcement->link = $request->input('link');
        if($request->hasFile('attachment')){

            $file = $request->file('attachment');
            $filename = $file->getClientOriginalName();
            $request->attachment->storeAs('attachments', $filename, 'public');
            $announcement->attachment = $filename;

        }
        
        $announcement->save();

        if($request->ann_affected = 'all')
        {
            $employee = User::all();
        }
        else
        {
            $employee = Employee::where('department','=',$announcement->ann_affected)->get();
        }

        Notification::send($employee, new AnnouncementNotification(Announcement::latest('id')->first()));
        
        return redirect()->route('announcement.index')->with('success', 'Announcement created successfully!');

    }

    public function markAsRead(){
        
        auth()->user()->employee->unreadNotifications->markAsRead();
        return redirect()->back();

    }

    public function show($id){
        
        $announcement = Announcement::where('id','=',$id)->first();
        return view('admin-announcement.index', compact('announcement', $announcement));

    }

    public function delete($id){

        $announcement = Announcement::where('id','=',$id)->first();
        $announcement->delete($announcement);
        return redirect()->back()->with('delete', "Announcement has been deleted!");

    }

    public function edit($id){
        $announcement = Announcement::where('id','=',$id)->first();
        return view('admin-announcement.edit', compact('announcement'));
    }

    public function update(Request $request, $id){

        $announcement = Announcement::where('id','=',$id)->first();
        $announcement->ann_title = $request->input('ann_title');
        $announcement->ann_start = $request->input('ann_start');
        $announcement->ann_end = $request->input('ann_end');
        $announcement->ann_affected = $request->input('ann_affected');
        $announcement->ann_other = $request->input('ann_other');
        $announcement->link = $request->input('link');
        if($request->hasFile('attachment')){

            $file = $request->file('attachment');
            $filename = $file->getClientOriginalName();
            $request->attachment->storeAs('attachments', $filename, 'public');
            $announcement->attachment = $filename;
        }
        $announcement->save();

       if($request->ann_affected = 'all')
       {
            $user = User::all();
            Notification::send($user, new AnnouncementNotification(Announcement::latest('id')->first()));
       }
       else
       {
            $employee = Employee::where('department','=',$announcement->ann_affected)->get();
            Notification::send($employee, new AnnouncementNotification(Announcement::latest('id')->first()));
       }
        
        return redirect()->route('announcement.index')->with('success', 'Announcement updated successfully!');

    }
}
