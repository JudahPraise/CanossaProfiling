@extends('user-login')

@section('login-form')

<form class="w-100 mt-3 d-flex flex-column"method="POST" action="#">
    <div class="form-group">
        <input type="email" class="form-control text-input @error('email') is-invalid @enderror" id="email"  name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Employee ID" autofocus>
  
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

    </div>

    <div class="form-group">
        <input type="email" class="form-control text-input @error('email') is-invalid @enderror" id="email"  name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address" autofocus>
  
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          
    </div>
    <a class="ml-2 mb-3" href="{{ route('login.form') }}">Back to log in</a>
    <button type="submit" class="btn btn-primary" style="border-radius: .5rem;">Submit</button>
</form>

@endsection