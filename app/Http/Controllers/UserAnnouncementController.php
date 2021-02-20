<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Notification;
use App\Notifications\AnnouncementNotification;
use Illuminate\Support\Facades\Auth;
use App\Announcement;
use App\Employee;

class UserAnnouncementController extends Controller
{

    // public function index(){

    //     $announcements = Announcement::where('ann_affected','LIKE',auth()->user()->employee->department)->get();
    //     return view('user-announcement.announcement', compact('announcements', $announcements));
    // }

    public function markAsRead(){
        
        auth()->user()->unreadNotifications->markAsRead();
        return redirect()->back();

    }

    public function show($id){

        auth()->user()->unreadNotifications->markAsRead();
        $announcement = Announcement::where('id','=',$id)->first();
        return view('user-announcement.view-announcement', compact('announcement', $announcement));
        
    }
}
