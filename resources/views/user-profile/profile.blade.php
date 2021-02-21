@extends('layouts.user')

@section('home-section')
<div class="hero__content grid is-vertical is-vertically-centered has-no-padding is-desktop-up ml-5">
  <div class="column is-full is-flex is-vertically-centered">
    <h1 class="text has-font-bold ml-3">{{ $user->employee->firstname}} {{ $user->employee->middlename }} <span class="has-text-primary">{{ $user->employee->lastname }}</span></h1>
    <div class="section has-no-margin has-no-padding">
      <ul class="has-no-list-style has-link-inherit">
        <li class="m-3">Employee ID: <h3 class="text-primary ha s-text-bold">{{ $user->employee->employee_id }}</h3></li>
        <li class="m-3">Position: <span class="text-primary">{{ $user->employee->position }}</span></li>
        <li class="m-3">Department: <span class="text-primary">{{ $user->employee->department }}</span></li>
      </ul>
    </div>

    <div class="column is-full">
        <div class="is-button-group">

          <a href="{{ route('announcements') }}"  class="btn btn-outline-primary rounded-pill m-2">
            <i class="fas fa-bullhorn mr-2"></i>
            Announcements
            @if($announcement_count)
              <span class="badge badge-danger ml-1">
               {{ $announcement_count }}
              </span>
            @endif
          </a>

          <a href="{{ route('user-message.index') }}"  class="btn btn-outline-success rounded-pill m-2">
            <i class="fas fa-envelope mr-2"></i>
            Messages
            @if($messages_count)
              <span class="badge badge-danger ml-1">
               {{ $messages_count }}
              </span>
            @endif
          </a>
          
        </div>
    </div>

  </div>
</div>

<div class="hero__content grid is-vertical is-vertically-centered has-no-padding is-tablet-down is-mobile-responsive ml-2">
  <div class="column is-full is-flex is-vertically-centered">
    <h1 class="text has-font-bold ml-3">{{ $user->employee->firstname}} {{ $user->employee->middlename }} <span class="has-text-primary">{{ $user->employee->lastname }}</span></h1>
    <div class="section has-no-margin has-no-padding">
      <ul class="has-no-list-style has-link-inherit">
        <li class="m-3">Employee ID: <h3 class="text-primary has-text-bold">{{ $user->employee->employee_id }}</h3></li>
        <li class="m-3">Position: <span class="text-primary">{{ $user->employee->position }}</span></li>
        <li class="m-3">Department: <span class="text-primary">{{ $user->employee->department }}</span></li>
      </ul>
    </div>

    <div class="column is-full">
        <div class="is-button-group ml-3">
          <a href="{{ route('profile.edit') }}" class="button is-link has-text-white is-rounded">Edit Profile</a>
        </div>
    </div>

  </div>
</div>
@endsection
