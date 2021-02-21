<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Announcement;
use App\UserMessages;
use App\AdminMessage;
use App\User;
use App\Document;
use App\Employee;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       view()->composer(['user-login', 'admin.dashboard'], function ($view) {
        
        $view->with('announcements', Announcement::all());

       });

       view()->composer(['layouts.user', 'user-announcement.announcement', 'user-pds.main-pds', 'user-profile.profile'], function ($view) {

        // $employee = User::with('employee')->get();

        // if($employee != null){

            $view->with('announcements', Announcement::where('ann_affected','LIKE',Auth::user()->employee->department)
            ->orWhere('ann_affected','LIKE','All')->orderBy('created_at', 'desc')->get())
            ->with('announcement_count', Announcement::where([['ann_affected','LIKE',auth()->user()->employee->department],['read','=','notread']])->orWhere([['ann_affected','LIKE','All'],['read','=','notread']])->count());

            $view->with('messages', UserMessages::where('send_to','=',Auth::user()->employee->employee_id)->orWhere('send_to_all','=',Auth::user()->employee->department)->orderBy('created_at', 'desc')->get())
            ->with('messages_count', UserMessages::where([['send_to','=',auth()->user()->employee->employee_id],['read','=','notread']])->orWhere([['send_to_all','=',auth()->user()->employee->department],['read','=','notread']])->count());

            $view->with('user', User::where('id', Auth::user()->id)->with('documents', 'employee')->first());

        // }else{

            // $view->with('announcements',  Announcement::where('ann_affected','LIKE','all')->get())
            // ->with('user', User::where('id', Auth::user()->id)->with('documents', 'employee')->first());
            
        // }

        // $view->with('announcements',  Announcement::where('ann_affected','=',auth()->user()->employee->department)->whereOr('ann_affected','=','All')->get())
        //     ->with('user', User::where('id', Auth::user()->id)->with('documents', 'employee')->first());
        
       });
    }
}
