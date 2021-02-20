<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Images;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login-form');
})->name('login.form');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

// * Admin Log In
Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminloginController@logout')->name('admin.logout');
});

// * User Change-Password
Route::get('user/change-password', 'ChangePasswordController@index')->name('user.update-password');
Route::get('user/edit-password/{id}', 'ChangePasswordController@edit')->name('user.edit-password');
Route::put('user/new-password/{id}', 'ChangePasswordController@update')->name('user.new-password');
Route::post('user/password-changed', 'ChangePasswordController@store')->name('user.change-password');

// * Image Upload Route
Route::get('user/', 'ImageController@index')->name('image.index');
Route::post('user/upload-image', 'ImageController@store')->name('image.upload');
Route::post('user/update-image{id}', 'ImageController@update')->name('image.update');

//* User Profile Routes
Route::prefix('profile')->group(function(){
    Route::get('/', 'EmployeeProfileController@index')->name('profile.index');
    Route::get('/create', 'EmployeeProfileController@create')->name('profile.create');
    Route::post('/create', 'EmployeeProfileController@store')->name('profile.submit');
    Route::get('/edit', 'EmployeeProfileController@edit')->name('profile.edit');
    Route::put('/update{id}', 'EmployeeProfileController@update')->name('profile.update');
});

Route::get('/announcements', function(){
    return view('user-announcement.announcement');
})->name('announcements');

Route::get('/inbox', function(){
    return view('user-profile.inbox');
})->name('inbox');

// TODO: User Personal Data Sheet
// * Personal Information
Route::prefix('personal-information')->group(function(){
    Route::get('/', 'PersonalInformationController@index')->name('personal.index');
    Route::get('/create', 'PersonalInformationController@create')->name('personal.create');
    Route::post('/store', 'PersonalInformationController@store')->name('personal.store');
    Route::get('/edit{id}', 'PersonalInformationController@edit')->name('personal.edit');
    Route::put('/update/{id}', 'PersonalInformationController@update')->name('personal.update');
});

// * Family Background
Route::prefix('family-background')->group(function(){
    Route::get('/', 'FamilyBackgroundController@index')->name('family.index');
    Route::get('/create', 'FamilyBackgroundController@create')->name('family.create');
    Route::post('/store', 'FamilyBackgroundController@store')->name('family.store');
    Route::get('/edit/{id}', 'FamilyBackgroundController@edit')->name('family.edit');
    Route::put('/update/{id}', 'FamilyBackgroundController@update')->name('family.update');
});

Route::post('/child', 'ChildrenController@store')->name('child.store');
Route::get('/child/edit/{id}', 'ChildrenController@edit')->name('child.edit');
Route::put('/child/update/{id}', 'ChildrenController@update')->name('child.update');

// * Educational Background
Route::prefix('educational-background/elementary')->group(function(){
    //? Elementary
    Route::get('/', 'ElementaryBackgroundController@index')->name('elementary.index');
    Route::get('/create', 'ElementaryBackgroundController@create')->name('elementary.create');
    Route::post('/store', 'ElementaryBackgroundController@store')->name('elementary.submit');
    Route::get('/edit', 'ElementaryBackgroundController@edit')->name('elementary.edit');
    Route::put('/update/{id}', 'ElementaryBackgroundController@update')->name('elementary.update');
    Route::delete('/delete/{elementary}', 'ElementaryBackgroundController@delete')->name('elementary.delete');

});

Route::prefix('educational-background/secondary')->group(function(){
    //? Secondary
    Route::get('/', 'SecondaryBackgroundController@index')->name('secondary.index');
    Route::get('/create', 'SecondaryBackgroundController@create')->name('secondary.create');
    Route::post('/store', 'SecondaryBackgroundController@store')->name('secondary.submit');
    Route::get('/edit', 'SecondaryBackgroundController@edit')->name('secondary.edit');
    Route::put('/update/{id}', 'SecondaryBackgroundController@update')->name('secondary.update');
    Route::delete('/delete/{secondary}', 'SecondaryBackgroundController@delete')->name('secondary.delete');
});

Route::prefix('educational-background/college')->group(function(){
    //? Secondary
    Route::get('/', 'CollegeBackgroundController@index')->name('college.index');
    Route::get('/create', 'CollegeBackgroundController@create')->name('college.create');
    Route::post('/store', 'CollegeBackgroundController@store')->name('college.submit');
    Route::get('/edit', 'CollegeBackgroundController@edit')->name('college.edit');
    Route::put('/update/{id}', 'CollegeBackgroundController@update')->name('college.update');
    Route::delete('/delete/{college}', 'CollegeBackgroundController@delete')->name('college.delete');
});

Route::prefix('educational-background/graduate_study')->group(function(){
    //? Secondary
    Route::get('/', 'GraduateStudyController@index')->name('graduate_study.index');
    Route::get('/create', 'GraduateStudyController@create')->name('graduate_study.create');
    Route::post('/store', 'GraduateStudyController@store')->name('graduate_study.submit');
    Route::get('/edit/{id}', 'GraduateStudyController@edit')->name('graduate_study.edit');
    Route::put('/update/{id}', 'GraduateStudyController@update')->name('graduate_study.update');
    Route::delete('/delete/{id}', 'GraduateStudyController@delete')->name('graduate_study.delete');
});

// * Work Experience
Route::prefix('work-experience')->group(function(){
    Route::get('/', 'ExperienceController@index')->name('work.index');
    Route::get('/create', 'ExperienceController@create')->name('work.create');
    Route::post('/create', 'ExperienceController@store')->name('work.submit');
    Route::get('/edit{id}', 'ExperienceController@edit')->name('work.edit');
    Route::put('/update/{id}', 'ExperienceController@update')->name('work.update');
    Route::delete('/delete/{experience}', 'ExperienceController@delete')->name('work.delete');
});

//* Training
Route::prefix('training')->group(function(){
    Route::get('/', 'TrainingController@index')->name('training.index');
    Route::get('/create', 'TrainingController@create')->name('training.create');
    Route::post('/submit', 'TrainingController@store')->name('training.submit');
    Route::get('/edit{id}', 'TrainingController@edit')->name('training.edit');
    Route::put('/update/{id}', 'TrainingController@update')->name('training.update');
    Route::delete ('/delete/{training}', 'TrainingController@delete')->name('training.delete');
    Route::get ('/download/{id}', 'TrainingController@download')->name('training.download');
    
});

//* Voluntary Works
Route::prefix('voluntary-work')->group(function(){
    Route::get('/', 'VoluntaryWorkController@index')->name('voluntary.index');
    Route::get('/create', 'VoluntaryWorkController@create')->name('voluntary.create');
    Route::post('/submit', 'VoluntaryWorkController@store')->name('voluntary.submit');
    Route::get('/edit{id}', 'VoluntaryWorkController@edit')->name('voluntary.edit');
    Route::put('/update/{id}', 'VoluntaryWorkController@update')->name('voluntary.update');
    Route::delete('/delete/{voluntary}', 'VoluntaryWorkController@delete')->name('voluntary.delete');
});

//*Documents
Route::prefix('document')->group(function(){
    Route::get('/', 'DocumentController@index')->name('document.index');
    Route::post('/submit', 'DocumentController@store')->name('document.submit');
    Route::delete('/delete{id}', "DocumentController@delete")->name('document.delete');
    Route::get('/download/{id}', 'DocumentController@download')->name('document.download');
});

//*Announcements
Route::prefix('announcement')->group(function(){
    Route::get('/', 'AnnouncementController@index')->name('announcement.index');
    Route::get('/create', 'AnnouncementController@create')->name('announcement.create');
    Route::post('/submit', 'AnnouncementController@store')->name('announcement.submit');
    Route::delete('/delete/{id}', 'AnnouncementController@delete')->name('announcement.delete');
    Route::get('/edit/{id}', 'AnnouncementController@edit')->name('announcement.edit');
    Route::put('/update/{id}', 'AnnouncementController@update')->name('announcement.update');
    Route::get('/mark-as-read', 'AnnouncementController@markAsRead')->name('announcement.markAsRead');
    Route::get('/view-announcement/{id}', 'AnnouncementController@show')->name('announcement.show');
});

Route::prefix('user-announcement')->group(function(){
    // Route::get('/', 'UserAnnouncementController@index')->name('announcements');
    Route::get('/mark-as-read', 'UserAnnouncementController@markAsRead')->name('user-announcement.markAsRead');
    Route::get('/view-announcement/{id}', 'UserAnnouncementController@show')->name('user-announcement.show');
});


// TODO: Admin Pages
Route::prefix('employees')->group(function(){
    Route::get('/', 'AdminEmployeesController@index')->name('employees.index');
});

Route::prefix('dashboard')->group(function(){
    Route::get('/', 'AdminDashboardController@index')->name('dashboard.index');
    Route::get('/teachers', 'AdminDashboardController@teacherFilter')->name('dashboard.teachers');
    Route::get('/staffs', 'AdminDashboardController@staffFilter')->name('dashboard.staffs');
    Route::get('/maintenance', 'AdminDashboardController@maintenanceFilter')->name('dashboard.maintenance');
});

Route::get('view-profile/{id}', 'ViewProfileController@viewProfile')->name('view.profile');

Route::prefix('inbox')->group(function(){
    Route::get('/', 'MessageController@index')->name('message.index');
    Route::get('/create-message', 'MessageController@createMessage')->name('message.create');
    Route::post('/send-message', 'MessageController@store')->name('message.store');
});


//TODO: PDF
//* Profile PDF
Route::prefix('PDF/resume')->group(function(){
    
    Route::get('/', 'PdfController@index')->name('resume.index');
    Route::get('/export', 'PdfController@exportToPDF')->name('profile.exportToPDF');
});

// Route::get('resume', 'PdfController@index')->name('resume.index');

Route::get('/registered-employees', 'RegisterController@index')->name('register.index');
// Route::get('/register-employees', 'RegisterController@create')->name('register.create');

Route::get('register-employee', function(){
    return view('register-employee.employee-register');
})->name('register.employee');

Route::get('forgot-password', function(){
    return view('forgot-form');
})->name('forgot');
