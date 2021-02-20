@extends('admin.register_employee')

@section('register-section')
<div class="row d-flex align-items-center justify-content-start">
    <form action="{{ route('register') }}" method="POST" class="w-100">
        @csrf
        <div class="form-row w-100">
            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label for="fname">Employee ID</label>
                    <input id="fname" type="text" class="form-control" name="employee_id">
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname">
                    @error('fname')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label for="mname">Middle Name</label>
                    <input id="mname" type="text" class="form-control @error('mname') is-invalid @enderror" name="mname" value="{{ old('mname') }}" required autocomplete="mname">
                    @error('mname')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname">
                    @error('lname')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

        </div>

        <div class="form-row w-100">
            <div class="col-md-4 mb-3">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Sex</label>
                    <select class="form-control" id="exampleFormControlSelect1" class="form-control @error('sex') is-invalid @enderror" name="sex" value="{{ old('sex') }}" required autofocus>
                        <option selected>Choose...</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                    @error('sex')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Department</label>
                    <select class="form-control" id="exampleFormControlSelect1" class="form-control" name="department">
                        <option selected>Choose...</option>
                        <option>Elementary</option>
                        <option>Junior High School</option>
                        <option>Senior High School</option>
                        <option>College</option>
                    </select>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Position</label>
                    <select class="form-control" id="exampleFormControlSelect1" class="form-control" name="position">
                        <option selected>Choose...</option>
                        <option>Teacher</option>
                        <option>Professor</option>
                        <option>Instructor</option>
                        <option>Staff</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-row">
          <div class="col-md-4 mb-3">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <div class="form-group">
                <label for="password-confirm">Confirm Password</label>
                <input id="password-confirm" type="text" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
          </div>

          <input type="text" name="verified" class="form-control @error('verified') is-invalid @enderror" name="verified" value="notVerified" required hidden>
          @error('verified')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

        </div>

        <button class="btn btn-primary" value="Submit Form" type="submit">Add User</button>
    </form>
</div>
@endsection