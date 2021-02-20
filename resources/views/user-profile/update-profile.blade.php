@extends('layouts.user')

@section('home-section')
  <div class="hero__content grid is-vertical is-vertically-centered has-no-padding">
    <div class="column is-full is-flex is-vertically-centered m-3">
      <div class="col d-flex align-items-center">

        <a href="{{ url()->previous() }}"><i class="fas fa-arrow-left mr-2" style="font-size: 2rem;"></i></a>
        <h3>Work Experience</h3>

      </div>
        <form action="{{ route('profile.update', $user->employee) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          
        <div class="row"> 
          <div class="col-md p-2">
            <label for="emp_id">Employee ID</label>
            <input id="employee_id" type="text" class="form-control @error('employee_id') is-invalid @enderror" name="employee_id" value="{{ $user->employee->employee_id }}" required autocomplete="employee_id" autofocus>
        
              @error('employee_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4 p-2">
            <label for="firstname">First name</label>
            <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ $user->employee->firstname }}" required autocomplete="firstname" autofocus>
        
              @error('firstname')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      
          <div class="col-md-4 p-2">
            <label for="lastname">Last name</label>
              <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ $user->employee->lastname }}" required autocomplete="lastname" autofocus>
        
              @error('lastname')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      
          <div class="col-md-4 p-2">
            <label for="middlename">Middle name</label>
        
              <input id="middlename" type="text" class="form-control @error('middlename') is-invalid @enderror" name="middlename" value="{{ $user->employee->middlename }}" required autocomplete="middlename" autofocus>
        
              @error('middlename')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              
          </div>
        </div>
    
        <div class="row">
        
          <div class="col-md-4 p-2">
            <label for="inputState">Department</label>
            <select id="inputState" name="department" class="form-control" required>
              <option value="Elementary">Elementary</option>
              <option value="Secondary">Secondary</option>
              <option value="College">College</option>
            </select>
          </div>
      
          <div class="col-md-4 p-2">
            <label for="inputState">Position</label>
            <select id="inputState" name="position" class="form-control" required>
              <option value="Teacher">Teacher</option>
              <option value="Staff">Staff</option>
              <option value="Maintenance">Maintenance</option>
            </select>
          </div>
        </div>
    
        <div class="row">
          <div class="col-md-12 p-2">
            <div class="form-group">
              <label for="bio">Biography</label>
              <textarea class="form-control @error('bio') is-invalid @enderror"  id="bio" rows="5" name="bio" placeholder="Tell us about yourself ...">{{ $user->employee->bio }}</textarea>
              @error('bio')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
        </div>
        <button type="submit" value="Submit Form" class="btn btn-primary">Save</button>
      </form>
    </div>
  </div>
@endsection