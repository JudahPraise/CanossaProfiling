@extends('layouts.user')

@section('home-section')
  <div class="hero__content grid is-vertical is-vertically-centered has-no-padding">
      <div class="column is-full is-flex is-vertically-centered m-3">
        
        <div class="col d-flex align-items-center">

          <a href="{{ url()->previous() }}"><i class="fas fa-arrow-left mr-2" style="font-size: 1rem;"></i></a>
          <h3>Create Profile</h3>
  
      </div>
        
        <form action="{{ route('profile.submit') }}" method="POST" enctype="multipart/form-data">
          @csrf
    
          <div class="row mr-3"> 
            <div class="col-md p-2">
              <label for="emp_id">Employee ID</label>
              <input id="employee_id" type="text" class="form-control @error('employee_id') is-invalid @enderror" name="employee_id" value="{{ old('employee_id') }}" required autocomplete="employee_id" autofocus>
          
                @error('employee_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
          </div>
          
          <div class="row mr-3">
            <div class="col-md-4 p-2">
              <label for="firstname">First name</label>
              <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
          
                @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
        
            <div class="col-md-4 p-2">
              <label for="lastname">Last name</label>
                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
          
                @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
        
            <div class="col-md-4 p-2">
              <label for="middlename">Middle name</label>
          
                <input id="middlename" type="text" class="form-control @error('middlename') is-invalid @enderror" name="middlename" value="{{ old('middlename') }}" required autocomplete="middlename" autofocus>
          
                @error('middlename')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
            </div>
          </div>
      
          <div class="row mr-3">
            <div class="col-md-4 p-2">
              <label for="inputState">Department</label>
              <select id="inputState" name="department" class="form-control">
                <option selected>Choose...</option>
                <option value="Elementary">Elementary</option>
                <option value="Secondary">Junior High School</option>
                <option value="Secondary">Senior High School</option>
                <option value="College">College</option>
              </select>
            </div>
        
            <div class="col-md-4 p-2">
              <label for="inputState">Position</label>
              <select id="inputState" name="position" class="form-control">
                <option selected>Choose...</option>
                <option value="Teacher">Teacher</option>
                <option value="Staff">Staff</option>
                <option value="Maintenance">Maintenance</option>
              </select>
            </div>
          </div>

          <input type="text" name="verified" class="form-control @error('verified') is-invalid @enderror" name="verified" value="verified" required hidden>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

          <button type="submit" value="Submit Form" class="btn btn-primary">Save</button>
        </form>
      </div>
  </div>

@endsection