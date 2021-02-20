@extends('user-pds.main-pds')

@section('portfolio')

<div class="row d-flex w-100 ml-1">

  <div class="row d-flex w-100 mt-5 align-items-center justify-content-between mb-3">

        <div class="col d-flex align-items-center">

            {{-- <a href="{{ url()->previous() }}"><i class="fas fa-arrow-left mr-2" style="font-size: 1rem;"></i></a> --}}
            <h3>Personal Information</h3>

        </div>

        <a href="{{ route('personal.edit', $personal->id ) }}" class="btn btn-ml btn-success text-white mr-2">Edit</a>
    </div>
    <div class="container-fluid">
        <div class="row d-flex align-items-center w-100">
            <div class="col-lg-12">
                <div class="row d-flex justify-content-center align-items-center w-100 mt-5" style="border-bottom: 1px solid rgba(156, 156, 156, 0.267)">
                    <div class="col-lg-4">
                        <label class="text-muted" for="">Surname</label>
                        <h4 class="text-primary">{{ $personal->surname }}</h4>
                    </div>
                    <div class="col-lg-4">
                        <label class="text-muted" for="">First Name</label>
                        <h4 class="text-primary">{{ $personal->first_name }}</h4>
                    </div>
                    <div class="col-lg-4">
                        <label class="text-muted" for="">Middle Name</label>
                        <h4 class="text-primary">{{ $personal->middle_name }}</h4>
                    </div>

                </div>
            
                <div class="row d-flex justify-content-center align-items-center w-100 mt-3" style="border-bottom: 1px solid rgba(156, 156, 156, 0.267)">
                    <div class="col-lg-4">
                        <label class="text-muted" for="">Date of Birth</label>
                        <h4 class="text-primary">{{ $personal->date_of_birth }}</h4>
                    </div>
                    <div class="col-lg-2">
                        <label class="text-muted" for="">Sex</label>
                        <h4 class="text-primary">{{ $personal->sex }}</h4>
                    </div>
                    <div class="col-lg-3">
                        <label class="text-muted" for="">Citizenship</label>
                        <h4 class="text-primary">{{ $personal->citizenship }}</h4>
                    </div>
                    <div class="col-lg-3">
                        <label class="text-muted" for="">Civil Status</label>
                        <h4 class="text-primary">{{ $personal->civil_status }}</h4>
                    </div>
                </div>
            
                <div class="row d-flex justify-content-center align-items-center w-100 mt-3" style="border-bottom: 1px solid rgba(156, 156, 156, 0.267)">
                    <div class="col-lg-4">
                        <label class="text-muted" for="">Height</label>
                        <h4 class="text-primary">{{ $personal->height }}</h4>
                    </div>
                    <div class="col-lg-4">
                        <label class="text-muted" for="">Weight</label>
                        <h4 class="text-primary">{{ $personal->weight }}</h4>
                    </div>
                    <div class="col-lg-4">
                        <label class="text-muted" for="">Blood Type</label>
                        <h4 class="text-primary">O</h4>
                    </div>
                </div>
            
                <div class="row d-flex justify-content-center align-items-center w-100 mt-3" style="border-bottom: 1px solid rgba(156, 156, 156, 0.267)">
                    <div class="col-lg-12">
                        <label class="text-muted" for="">Residential Address</label>
                        <h4 class="text-primary">{{ $personal->address }}</h4>
                    </div>
                </div>
            
                <div class="row d-flex justify-content-center align-items-center w-100 mt-3" style="border-bottom: 1px solid rgba(156, 156, 156, 0.267)">
                    <div class="col-lg-2">
                        <label class="text-muted" for="">Zip Code</label>
                        <h4 class="text-primary">{{ $personal->zip_code }}</h4>
                    </div>
                    <div class="col-lg-4">
                        <label class="text-muted" for="">Telephone Number</label>
                        <h4 class="text-primary" >{{ $personal->tel_number }}</h4>
                    </div>
                    <div class="col-lg-6">
                        <label class="text-muted" for="">Cellphone Number</label>
                        <h4 class="text-primary">{{ $personal->cell_number }}</h4>
                    </div>
                    
                </div>   
                <div class="row d-flex justify-content-center align-items-center w-100 mt-3">
                    <div class="col-lg-12">
                        <label class="text-muted" for="">Email Address</label>
                        <h4 class="text-primary">{{ $personal->email_address }}</h4>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    

    
    
    
</div>

@endsection