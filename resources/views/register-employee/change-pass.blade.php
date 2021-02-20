@extends('admin.register_employee')

@section('register-section')

<div class="row w-100 px-2 d-flex align-items-center justify-content-start">
    <div class="col-lg-8">
        <form method="POST" action="{{ route('user.update-password', $user->id) }}" class="w-100">
            @csrf 
            @method('PUT')

             @foreach ($errors->all() as $error)
                <p class="text-danger">{{ $error }}</p>
             @endforeach 

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
                <div class="col-md-6">
                    <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm Password</label>

                <div class="col-md-6">
                    <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Update Password
                    </button>
                    <a class="btn btn-secondary" href="{{ url()->previous() }}">Cancel</a>
                </div>
            </div>
        </form>
    </div>

    <div class="col-lg-4">
        <h3 class="text-primary">{{ $user->getFullname() }}</h3>
        <h5>Email:  {{ $user->email }}</h5>
        <h5>Department:  {{ $user->employee->department }}</h5>
        <h5>Position:  {{ $user->employee->position }}</h5>
    </div>
    
</div>

@endsection