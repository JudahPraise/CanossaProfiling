<div class="row mt-5 d-flex justify-content-center header">

    <div class="col-lg-2 d-flex justify-content-center">
        <div class="image is-square is-large-square is-rounded is-center">
          <img class="img" src="{{ asset('/storage/images/'.$user->image) }}" alt="">
        </div>
    </div>


    <div class="col-lg-4 ml-5 align-self-center">
      <h3>{{ $user->employee->firstname." ".$user->employee->lastname }}</h3>
      <h5>{{ $user->employee->employee_id }}</h5>
      <span><h6>{{ $user->employee->department."  ".$user->employee->position }}</h6></span>
      @if(!empty($user->personal))
        <h6 class="mt-5"><i class="fas fa-map-marker-alt"></i>{{ $user->personal->address }}</h6>
        <h6 class=""><i class="fas fa-envelope"></i>{{ $user->personal->email_address }}</h6>
      @else
        <h6 class="mt-5"><i class="fas fa-map-marker-alt"></i>No data</h6>
        <h6 class=""><i class="fas fa-envelope"></i>No data</h6>
      @endIf
    </div>
  </div>

  <hr class="sidebar-divider d-none d-md-block ">

  <div class="row mt-3 w-100 d-flex">
    <div class="col-lg-6" style="min-width: 66%">
      <div class="card-deck w-100">
        <div class="card has-no-shadow">
          <div class="card-body">
            <h3 class="card-title">Spouse</h3>
            <h6 class="text-muted">Name:</h6>
            <h5>{{ $user->family->spouse_firstname." ".$user->family->spouse_middlename." ".$user->family->spouse_surname}}</h5>
            <h6 class="text-muted">Occupation:</h6>
            @if(!@empty($user->family->spouse_occupation))
                <h5>{{ $user->family->spouse_occupation }}</h5>
            @else
                <h5 class="font-italic text-muted">None</h5>
            @endIf
    
            <h6 class="text-muted">Business Name:</h6>
            @if(!@empty($user->family->spouse_employer_business_name))
                <h5>{{ $user->family->spouse_employer_business_name }}</h5>
            @else
                <h5 class="font-italic text-muted">None</h5>
            @endIf
    
            <h6 class="text-muted">Business Address:</h6>
            @if(!@empty($user->family->spouse_business_address))
                <h5>{{ $user->family->spouse_business_address }}</h5>
            @else
                <h5 class="font-italic text-muted">None</h5>
            @endIf
    
            <h6 class="text-muted">Phone number:</h6>
            @if(!@empty($user->family->spouse_tel_no))
                <h5>{{ $user->family->spouse_tel_no }}</h5>
            @else
                <h5 class="font-italic text-muted">None</h5>
            @endIf
          </div>
        </div>
        <div class="card has-no-shadow">
          <div class="card-body">
            <h3 class="card-title">Father</h3>
            <h6 class="text-muted">Name:</h6>
            <h5>{{ $user->family->father_firstname." ".$user->family->father_middlename." ".$user->family->father_surname}}</h5>
            <h6 class="text-muted">Occupation:</h6>
            @if(!@empty($user->family->father_occupation))
                <h5>{{ $user->family->father_occupation }}</h5>
            @else
                <h5 class="font-italic text-muted">None</h5>
            @endIf
    
            <h6 class="text-muted">Business Name:</h6>
            @if(!@empty($user->family->father_employer_business_name))
                <h5>{{ $user->family->father_employer_business_name }}</h5>
            @else
                <h5 class="font-italic text-muted">None</h5>
            @endIf
    
            <h6 class="text-muted">Business Address:</h6>
            @if(!@empty($user->family->father_business_address))
                <h5>{{ $user->family->father_business_address }}</h5>
            @else
                <h5 class="font-italic text-muted">None</h5>
            @endIf
    
            <h6 class="text-muted">Phone number:</h6>
            @if(!@empty($user->family->father_tel_no))
                <h5>{{ $user->family->father_tel_no }}</h5>
            @else
                <h5 class="font-italic text-muted">None</h5>
            @endIf
          </div>
        </div>
        <div class="card has-no-shadow">
          <div class="card-body">
            <h3 class="card-title">Spouse</h3>
            <h6 class="text-muted">Name:</h6>
            <h5>{{ $user->family->spouse_firstname." ".$user->family->spouse_middlename." ".$user->family->spouse_surname}}</h5>
            <h6 class="text-muted">Occupation:</h6>
            @if(!@empty($user->family->spouse_occupation))
                <h5>{{ $user->family->spouse_occupation }}</h5>
            @else
                <h5 class="font-italic text-muted">None</h5>
            @endIf
    
            <h6 class="text-muted">Business Name:</h6>
            @if(!@empty($user->family->spouse_employer_business_name))
                <h5>{{ $user->family->spouse_employer_business_name }}</h5>
            @else
                <h5 class="font-italic text-muted">None</h5>
            @endIf
    
            <h6 class="text-muted">Business Address:</h6>
            @if(!@empty($user->family->spouse_business_address))
                <h5>{{ $user->family->spouse_business_address }}</h5>
            @else
                <h5 class="font-italic text-muted">None</h5>
            @endIf
    
            <h6 class="text-muted">Phone number:</h6>
            @if(!@empty($user->family->spouse_tel_no))
                <h5>{{ $user->family->spouse_tel_no }}</h5>
            @else
                <h5 class="font-italic text-muted">None</h5>
            @endIf
          </div>
        </div>
      </div>
      <div class="card has-no-shadow">
        <div class="card-body">
        </div>
      </div>
    </div>

    <div class="col-lg-4 p-0 align-self-end">
      <div class="card rounded has-no-shadow">
        <div class="card-body d-flex flex-column">
          <div class="row d-flex flex-column p-2">
            <h4>Personal Information</h4>
            @if(!empty($user->personal))
              <h5>Date of birth: {{ "  ".$user->personal->date_of_birth->format('M  d, Y') }}</h5>
              <h5>Sex: {{ "  ".$user->personal->sex }}</h5>
              <h5>Citizenship: {{ "  ".$user->personal->citizenship }}</h5>
              <h5>Civil Status: {{ "  ".$user->personal->civil_status }}</h5>
              <h5>Height: {{ "  ".$user->personal->height }}</h5>
              <h5>Weight: {{ "  ".$user->personal->weight }}</h5>
              <h5>PRC: 123456789</h5>
              <h5>GSIS: 123456789</h5>
              <h5>SSS: 123456789</h5>
              <h5>PAG-IBIG: 123456789</h5>
              <h5>Drivers License</h5>
            @else
              <h5>No data</h5>
            @endIf
            
            
          </div>
          <hr class="sidebar-divider d-none d-md-block ">
          <div class="row d-flex flex-column p-2">
            <h4>Documents</h4>
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

  <div class="row" style="width: 100%; min-height: 15rem ">
    <div class="col-lg-6 d-flex align-items-center justify-content-center" style="background-color: rgb(82, 82, 82);">
      <h5 class="text-white text-center" style="font-size: 2rem">Elementary</h5>
    </div>
    <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center elem-bkg">
      <div class="row d-flex flex-column justify-content-center ed-glass w-100 h-100 pl-5">
        <h4><i class="fas fa-graduation-cap mr-2"></i>2021 - 2022</h4>
        <h4><i class="fas fa-school mr-2"></i>Luis Palad National High School</h4>
        <h4><i class="fas fa-graduation-cap mr-2"></i>Valedictorian</h4>
      </div>
    </div>
  </div>

  <div class="row" style="width: 100%; min-height: 15rem">
    
    <div class="col-lg-6 order-lg-2 d-flex align-items-center justify-content-center" style="background-color: #0059B3;">
      <h5 class="text-white text-center" style="font-size: 2rem">Secondary</h5>
    </div>
    <div class="col-lg-6 order-lg-1 d-flex flex-column align-items-center justify-content-center sec-bkg">
      <div class="row d-flex flex-column justify-content-center ed-glass w-100 h-100 pl-5" style="color:rgb(82, 82, 82) ">
        <h4><i class="fas fa-graduation-cap mr-2"></i>2021 - 2022</h4>
        <h4><i class="fas fa-school mr-2"></i>Luis Palad National High School</h4>
        <h4><i class="fas fa-graduation-cap mr-2"></i>Valedictorian</h4>
      </div>
    </div>
  </div>

  <div class="row" style="width: 100%; min-height: 15rem">
    <div class="col-lg-6 d-flex align-items-center justify-content-center" style="background-color: rgb(82, 82, 82);">
      <h5 class="text-white text-center" style="font-size: 2rem">College</h5>
    </div>
    <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center col-bkg">
      <div class="row d-flex flex-column justify-content-center ed-glass w-100 h-100 pl-5">
        <h4><i class="fas fa-graduation-cap mr-2"></i>2021 - 2022</h4>
        <h4><i class="fas fa-school mr-2"></i>Luis Palad National High School</h4>
        <h4><i class="fas fa-graduation-cap mr-2"></i>Valedictorian</h4>
      </div>
    </div>
  </div>