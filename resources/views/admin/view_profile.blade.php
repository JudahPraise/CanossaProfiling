@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="{{ asset('css/view-profile.css') }}">

<style>
  .container{
    /* border: 2px solid black; */
    min-width: 100%;
    padding: 0;
  }
  .header{
    /* border: 2px solid black; */
    padding: 0;
    margin: 0;
    height: 10%@important;
    max-width: 100%@important;
  }
</style>

<div class="container d-flex flex-column align-items-center p-0">

  <div class="container d-flex justify-content-center align-content-center glass-background">
    <div class="row w-100 glass d-flex justify-content-center mt-4 mb-4 align-content-center">
      <div class="col-lg-4 order-lg-6 d-flex justify-content-center align-content-center p-2">
        <img class="img p-3" src="{{ asset('/storage/images/'.$user->image) }}" alt="" style="width: 40rem; height: 30rem; border-radius: 3rem;">
      </div>
      <div class="col-lg-6 order-lg-4 pl-lg-5 ml-lg-5 mb-4 d-flex flex-column justify-content-center">
        <h2>{{ $user->employee->firstname." ".$user->employee->lastname }}</h2>
        <h3>{{ $user->employee->employee_id }}</h3>
        <span><h4>{{ $user->employee->department."  ".$user->employee->position }}</h4></span>
        @if(!empty($user->personal))
          <h5 class="mt-5"><i class="fas fa-map-marker-alt"></i>{{ $user->personal->address }}</h5>
          <h5 class=""><i class="fas fa-envelope"></i>{{ $user->personal->email_address }}</h5>
        @else
          <h5 class="mt-5"><i class="fas fa-map-marker-alt"></i>No data</h5>
          <h5 class=""><i class="fas fa-envelope"></i>No data</h5>
        @endIf
      <button class="btn mt-3 p-2 message" style=""><i class="fas fa-envelope"></i>Message</button>
      </div>
    </div>
  </div>

  <hr class="sidebar-divider d-none d-md-block ">

  <div class="row w-100 d-flex flex-column mt-4 align-content-center">
    <h2 class="text-center" style="text-decoration: underline; color: #0059B3;">Personal Information</h2>
    
    <div class="row mt-3 d-flex justify-content-center" style="width: 80%">
      
      <div class="col-lg-4 order-lg-1 mt-4" >
        <div class="card"  style="border-left: 4px solid #1265B8">
          <div class="card-body">
            <div class="container d-flex flex-column justify-content-center">
              @if(!empty($user->personal))
              <h5>Date of birth: <span class="ml-5">{{ "  ".$user->personal->date_of_birth->format('M  d, Y') }}</span></h5>
              <h5>Sex: <span style="margin-left: 8rem">{{ "  ".$user->personal->sex }}</span></h5>
              <h5>Citizenship: <span style="margin-left: 3.7rem">{{ "  ".$user->personal->citizenship }}</span></h5>
              <h5>Civil Status: <span style="margin-left: 3.7rem">{{ "  ".$user->personal->civil_status }}</span></h5>
              <h5>Height: <span style="margin-left: 6rem">{{ "  ".$user->personal->height }}</span></h5>
              <h5>Weight: <span style="margin-left: 5.5rem">{{ "  ".$user->personal->weight }}</span></h5>
              @else
              <h5 class="text-center text-muted">No Data</h5>
              @endIf
            </div>
          </div>
        </div>
        
      </div>
   
      <div class="col-lg-4 order-lg-2 mt-4">
        <div class="card border-left-success">
          <div class="card-body">
            <h5>PRC: <span style="margin-left: 6.8rem">123456789</span></h5>
            <h5>GSIS: <span style="margin-left: 6.5rem">123456789</span></h5>
            <h5>SSS: <span style="margin-left: 7.3rem"> 123456789</span></h5>
            <h5>PAG-IBIG: <span style="margin-left: 4rem">123456789</span></h5>
            <h5>Drivers License: <span style="margin-left: 1rem">123456789</span></h5>
          </div>
        </div>

      </div>

      <div class="col-lg-4 order-lg-4 mt-4" >
        <div class="card border-left-info d-flex justify-content-center align-content-center">
          <div class="card-body ">
            @forelse($user->documents as $document)
              <h5>{{ $document->type_document.": " }}<a href="{{ route('document.download', $document->id) }}">{{ $document->document_filename }}</a></h5>
            @empty
              <h5>No Documents</h5>
            @endforelse
          </div>
        </div>
        
      </div>
    </div>
    

  </div>

  <div class="row d-flex flex-column mt-5" style="width: 80%">
    <h2 class="text-center" style="text-decoration: underline; color: #0059B3;">Family Background</h2>
    <div class="card-deck m-3">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Spouse</h3>
          <h6 class="text-muted">Name:</h6>
          @if(!empty($user->family))
            <h5>{{ $user->family->spouseFullname() }}</h5>
            <h6 class="text-muted">Occupation:</h6>
            <h5>{{ $user->family->spouse_occupation }}</h5>

            <h6 class="text-muted">Business Name:</h6>
            <h5>{{ $user->family->spouse_employer_business_name }}</h5>

            <h6 class="text-muted">Business Address:</h6>
            <h5>{{ $user->family->spouse_business_address }}</h5>

            <h6 class="text-muted">Phone number:</h6>
            <h5>{{ $user->family->spouse_tel_no }}</h5>
          
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Father</h3>
          <h6 class="text-muted">Name:</h6>
          {{-- @if(!empty($user->family)) --}}
          <h5>{{ $user->family->fatherFullname()}}</h5>
          {{-- <h5>{{ $user->family->spouse_firstname." ".$user->family->spouse_middlename." ".$user->family->spouse_surname}}</h5> --}}
          {{-- @else --}}
          {{-- <h5 class="font-italic text-muted">None</h5> --}}
          {{-- @endif --}}
          <h6 class="text-muted">Occupation:</h6>
          {{-- @if(!@empty($user->family->father_occupation)) --}}
              <h5>{{ $user->family->father_occupation }}</h5>
          {{-- @else --}}
              {{-- <h5 class="font-italic text-muted">None</h5> --}}
          {{-- @endIf --}}
  
          <h6 class="text-muted">Business Name:</h6>
          {{-- @if(!@empty($user->family->father_employer_business_name)) --}}
              <h5>{{ $user->family->father_employer_business_name }}</h5>
          {{-- @else --}}
              {{-- <h5 class="font-italic text-muted">None</h5> --}}
          {{-- @endIf --}}
  
          <h6 class="text-muted">Business Address:</h6>
          {{-- @if(!@empty($user->family->father_business_address)) --}}
              <h5>{{ $user->family->father_business_address }}</h5>
          {{-- @else --}}
              <h5 class="font-italic text-muted">None</h5>
          {{-- @endIf --}}
  
          <h6 class="text-muted">Phone number:</h6>
          {{-- @if(!@empty($user->family->father_tel_no)) --}}
              <h5>{{ $user->family->father_tel_no }}</h5>
          {{-- @else --}}
              {{-- <h5 class="font-italic text-muted">None</h5> --}}
          {{-- @endIf --}}
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Mother</h3>
          <h6 class="text-muted">Name:</h6>
          {{-- @if(!empty($user->family->motherFullname())) --}}
          <h5>{{ $user->family->motherFullname()}}</h5>
          {{-- <h5>{{ $user->family->spouse_firstname." ".$user->family->spouse_middlename." ".$user->family->spouse_surname}}</h5> --}}
          {{-- @else --}}
          <h5 class="font-italic text-muted">None</h5>
          {{-- @endif --}}
          <h6 class="text-muted">Occupation:</h6>
          {{-- @if(!@empty($user->family->mother_occupation)) --}}
              <h5>{{ $user->family->mother_occupation }}</h5>
          {{-- @else --}}
              {{-- <h5 class="font-italic text-muted">None</h5> --}}
          {{-- @endIf --}}
  
          <h6 class="text-muted">Business Name:</h6>
          {{-- @if(!@empty($user->family->mother_employer_business_name)) --}}
              <h5>{{ $user->family->mother_employer_business_name }}</h5>
          {{-- @else --}}
              {{-- <h5 class="font-italic text-muted">None</h5> --}}
          {{-- @endIf --}}
  
          <h6 class="text-muted">Business Address:</h6>
          {{-- @if(!@empty($user->family->mother_business_address)) --}}
              <h5>{{ $user->family->mother_business_address }}</h5>
          {{-- @else --}}
              {{-- <h5 class="font-italic text-muted">None</h5> --}}
          {{-- @endIf --}}
  
          <h6 class="text-muted">Phone number:</h6>
          {{-- @if(!@empty($user->family->mother_tel_no)) --}}
              <h5>{{ $user->family->mother_tel_no }}</h5>
          {{-- @else --}}
              {{-- <h5 class="font-italic text-muted">None</h5> --}}
          {{-- @endIf --}}
          @else
              <h5 class="font-italic text-muted">None</h5>
          @endIf
        </div>
      </div>

    </div>

    

    <h3 class="ml-5">Children</h3>
    <div class="row d-flex justify-content-center mb-5" style="width: 100%">
      <table class="table table-bordered mt-2 text-center" style="width: 90%; color: black;">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Date of Birth</th>
          </tr>
        </thead>
        <tbody>
          @forelse($user->children as $child)
          <tr>
            <td>{{ $child->name }}</td>
            <td>{{ $child->date_of_birth->format('M, d, Y') }}</td>
          </tr>
          @empty
            <tr>
              <td class="text-muted font-italic">No Data</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

  <div class="row d-flex flex-column mt-5" style="width: 80%">
    <h2 class="text-center" style="text-decoration: underline; color: #0059B3;">Educational Background</h2>
  </div>

  <div class="row d-flex p-3" style="width: 80%">
    <div class="col-lg-4 mt-3">
      <div class="row d-flex flex-column text-center">
        <h4 style="color: #0059B3;">Elementary</h4>
        @if(!empty($user->elementary))
          @if (!empty($user->elementary->level_units_earned))
          <h4>{{ $user->elementary->level_units_earned }}</h4>
          <h4>{{ $user->elementary->name_of_school }} </h4>
          @else
          <h4>{{ $user->elementary->graduated_date_from->format('Y')." "." - ".$user->secondary->graduated_date_to->format('Y') }}</h4>
          <h4>{{ $user->elementary->name_of_school }} </h4>
          <h4>{{ $user->elementary->academic_reward }}</h4>
          @endif
        @else
          <h4>No Data</h4>
        @endif
        
      </div>
    </div>
    <div class="col-lg-4 mt-3">
      <div class="row d-flex flex-column text-center">
        <h4 style="color: #0059B3;">Secondary</h4>
        @if(!empty($user->secondary))
          @if (!empty($user->secondary->level_units_earned))
            <h4>{{ $user->secondary->level_units_earned }}</h4>
            <h4>{{ $user->secondary->name_of_school }} </h4>
          @else
            <h4>{{ $user->secondary->graduated_date_from->format('Y')." "." - ".$user->secondary->graduated_date_to->format('Y') }}</h4>
            <h4>{{ $user->secondary->name_of_school }} </h4>
            <h4>{{ $user->secondary->academic_reward }}</h4>
          @endif
        @else
          <h4>No Data</h4>
        @endif
      </div>
    </div>
    <div class="col-lg-4 mt-3">
      <div class="row d-flex flex-column text-center">
        <h4 style="color: #0059B3;">College</h4>
        @if(!empty($user->college))
          @if (!empty($user->college->level_units_earned))
            <h4>{{ $user->college->level_units_earned }}</h4>
            <h4>{{ $user->college->name_of_school }} </h4>
          @else
            <h4>{{ $user->college->graduated_date_from->format('Y')." "." - ".$user->secondary->graduated_date_to->format('Y') }}</h4>
            <h4>{{ $user->college->name_of_school }} </h4>
            <h4>{{ $user->college->academic_reward }}</h4>
          @endif
        @else
          <h4>No Data</h4>
        @endif
      </div>
    </div>
  </div>

  <div class="row d-flex p-3 mb-5" style="width: 80%">
    <h4 style="color: #0059B3;">Graduate Studies</h4>
    <div class="table-responsive">
      <table class="table table-bordered text-center" style="color: black;">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Year Graduated</th>
            <th scope="col">Degree</th>
            <th scope="col">Course</th>
            <th scope="col">School</th>
            <th scope="col">Academic Award</th>
          </tr>
        </thead>
        <tbody>
          @forelse($user->graduate_studies as $study)
            <tr>
              <td>{{ $study->graduated_date_from->format('Y')." "." - ".$study->graduated_date_to->format('Y') }}</td>
              <td>{{ $study->degree }}</td>
              <td>{{ $study->course }}</td>
              <td>{{ $study->name_of_school }}</td>
              <td>{{ $study->academic_reward}}</td>
            </tr>
          @empty
            <tr>
              <td class="font-italic text-muted">No Data</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

  <div class="row d-flex flex-column mt-3" style="width: 80%">
    <h2 class="text-center" style="text-decoration: underline; color: #0059B3;">Work Experience</h2>
  </div>

  <div class="row d-flex justify-content-center align-items-center p-3 mb-5" style="width: 80%">
    @forelse($user->experiences as $experience)
    <div class="col-lg-4 col-md-6 mb-4 align-self-start">
      <div class="card  h-100 py-3" style="border-left: 4px solid #1265B8">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <h5>{{ $experience->date_from->format('Y')." "." - ".$experience->date_to->format('Y') }}</h5>
              <h5 style="color: #0059B3">{{ $experience->work_description }}</h5>
              <h5>{{ $experience->work_place }}</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    @empty
      <h5 class="text-muted font-italic">No Data</h5>
    @endforelse
  </div>

  <div class="row d-flex flex-column mt-3" style="width: 80%">
    <h2 class="text-center" style="text-decoration: underline; color: #0059B3;">Training Programs</h2>
  </div>

  <div class="row d-flex p-3 mb-5" style="width: 80%">
    <div class="table-responsive">
      <table class="table table-bordered text-center" style="color: black;">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Date</th>
            <th scope="col">Title</th>
            <th scope="col">Sponsor</th>
            <th scope="col">Certificate</th>
          </tr>
        </thead>
        <tbody>
          @forelse($user->trainings as $training)
            <tr>
              <td>{{ $training->training_date->format('M,d,Y') }}</td>
              <td>{{ $training->training_title }}</td>
              <td>{{ $training->training_sponsor }}</td>
              <td>
                <a href="{{ route('training.download', $training->id) }}">{{ $training->training_certificate }}</a>
              </td>
            </tr>
          @empty
            <tr>
              <td class="font-italic text-muted">No Data</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

  <div class="row d-flex flex-column mt-3" style="width: 80%">
    <h2 class="text-center" style="text-decoration: underline; color: #0059B3;">Voluntary Works</h2>
  </div>

  <div class="row d-flex p-3 mb-5" style="width: 80%">
    <div class="table-responsive">
      <table class="table table-bordered text-center" style="color: black;">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Date</th>
            <th scope="col">Position</th>
            <th scope="col">No. Hours</th>
            <th scope="col">Name/Address</th>
          </tr>
        </thead>
        <tbody>
          @forelse($user->voluntary_works as $work)
            <tr>
              <td>{{ $work->date_from->format('Y')." "." - ".$work->date_to->format('Y') }}</td>
              <td>{{ $work->position }}</td>
              <td>{{ $work->no_hours }}</td>
              <td>{{ $work->name_address }}</td>
            </tr>
          @empty
            <tr>
              <td class="font-italic text-muted">No Data</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection