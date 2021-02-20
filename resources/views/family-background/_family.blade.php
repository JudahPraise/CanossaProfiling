@if(!empty($family_background))
    <div class="card-deck w-100">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Spouse</h3>
          <h6 class="text-muted">Name:</h6>
          <h5>{{ $family_background->spouse_firstname." ".$family_background->spouse_middlename." ".$family_background->spouse_surname}}</h5>
          <h6 class="text-muted">Occupation:</h6>
          @if(!@empty($family_background->spouse_occupation))
              <h5>{{ $family_background->spouse_occupation }}</h5>
          @else
              <h5 class="font-italic text-muted">None</h5>
          @endIf
  
          <h6 class="text-muted">Business Name:</h6>
          @if(!@empty($family_background->spouse_employer_business_name))
              <h5>{{ $family_background->spouse_employer_business_name }}</h5>
          @else
              <h5 class="font-italic text-muted">None</h5>
          @endIf
  
          <h6 class="text-muted">Business Address:</h6>
          @if(!@empty($family_background->spouse_business_address))
              <h5>{{ $family_background->spouse_business_address }}</h5>
          @else
              <h5 class="font-italic text-muted">None</h5>
          @endIf
  
          <h6 class="text-muted">Phone number:</h6>
          @if(!@empty($family_background->spouse_tel_no))
              <h5>{{ $family_background->spouse_tel_no }}</h5>
          @else
              <h5 class="font-italic text-muted">None</h5>
          @endIf
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Father</h3>
          <h6 class="text-muted">Name:</h6>
          <h5>{{ $family_background->father_firstname." ".$family_background->father_middlename." ".$family_background->father_surname}}</h5>
          <h6 class="text-muted">Occupation:</h6>
          @if(!@empty($family_background->father_occupation))
              <h5>{{ $family_background->father_occupation }}</h5>
          @else
              <h5 class="font-italic text-muted">None</h5>
          @endIf
  
          <h6 class="text-muted">Business Name:</h6>
          @if(!@empty($family_background->father_employer_business_name))
              <h5>{{ $family_background->father_employer_business_name }}</h5>
          @else
              <h5 class="font-italic text-muted">None</h5>
          @endIf
  
          <h6 class="text-muted">Business Address:</h6>
          @if(!@empty($family_background->father_business_address))
              <h5>{{ $family_background->father_business_address }}</h5>
          @else
              <h5 class="font-italic text-muted">None</h5>
          @endIf
  
          <h6 class="text-muted">Phone number:</h6>
          @if(!@empty($family_background->father_tel_no))
              <h5>{{ $family_background->father_tel_no }}</h5>
          @else
              <h5 class="font-italic text-muted">None</h5>
          @endIf
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Mother</h3>
          <h6 class="text-muted">Name:</h6>
          <h5>{{ $family_background->mother_firstname." ".$family_background->mother_middlename." ".$family_background->mother_surname}}</h5>
          <h6 class="text-muted">Occupation:</h6>
          @if(!@empty($family_background->mother_occupation))
              <h5>{{ $family_background->mother_occupation }}</h5>
          @else
              <h5 class="font-italic text-muted">None</h5>
          @endIf
  
          <h6 class="text-muted">Business Name:</h6>
          @if(!@empty($family_background->mother_employer_business_name))
              <h5>{{ $family_background->mother_employer_business_name }}</h5>
          @else
              <h5 class="font-italic text-muted">None</h5>
          @endIf
  
          <h6 class="text-muted">Business Address:</h6>
          @if(!@empty($family_background->mother_business_address))
              <h5>{{ $family_background->mother_business_address }}</h5>
          @else
              <h5 class="font-italic text-muted">None</h5>
          @endIf
  
          <h6 class="text-muted">Phone number:</h6>
          @if(!@empty($family_background->mother_tel_no))
              <h5>{{ $family_background->mother_tel_no }}</h5>
          @else
              <h5 class="font-italic text-muted">None</h5>
          @endIf
          
        </div>
      </div>
    </div>
    @else
    <div class="card-deck w-100">
      <div class="card">
        <h3 class="card-title m-3">Spouse</h3>
        <div class="card-body">
          
          <p class="card-text font-italic text-muted">Add data</p>
          
        </div>
      </div>
      <div class="card">
        <h3 class="card-title m-3">Father</h3>
        <div class="card-body">
          
          <p class="card-text font-italic text-muted">Add data</p>
  
        </div>
      </div>
      <div class="card">
        <h3 class="card-title m-3">Mother</h3>
        <div class="card-body">
          
          <p class="card-text font-italic text-muted">Add data</p>
  
        </div>
      </div>
    </div>
    @endIf