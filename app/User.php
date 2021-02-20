<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Employee;
use App\Experience;
use App\Secondary;
use App\College;
use App\GraduateStudy;
use App\Training;
use App\PersonalInformation;
use App\VoluntaryWork;
use App\FamilyBackground;
use App\Children;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'mname', 'lname', 'sex', 'verified', 'email', 'password', 'image',
    ];

    public function getFullname(){
        return $this->fname . ' '. $this->mname .' '. $this->lname;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //* Employee
    public function employee()
    {
        return $this->hasOne(Employee::class);
    }

    //? Employee Gates
    public function hasAnyEmployee($employee){
        if($this->employee()->whereIn('user_id', $employee)->first()){
            return true;
        }

        return false;
    }

    public function hasEmployee($employee){
        
        if($this->employee()->where('user_id', $employee)->first()){
            return true;
        }

        return false;
    }

   
    //*Training
    public function personal()
    {
        return $this->hasOne(PersonalInformation::class);
    }


    //* Work Experience
    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    //*Elementary
    public function elementary()
    {
        return $this->hasOne(Elementary::class);
    }

    //*Secondary
    public function secondary()
    {
        return $this->hasOne(Secondary::class);
    }

    //*College
    public function college()
    {
        return $this->hasOne(College::class);
    }

    //*Graduate Study
    public function graduate_studies()
    {
        return $this->hasMany(GraduateStudy::class);
    }

    //*Training
    public function trainings()
    {
        return $this->hasMany(Training::class);
    }

    //*Voluntary Works
    public function voluntary_works()
    {
        return $this->hasMany(VoluntaryWork::class);
    }

    //*Docuements
    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function family()
    {
        return $this->hasOne(FamilyBackground::class);
    }

    public function children()
    {
        return $this->hasMany(Children::class);
    }
}
