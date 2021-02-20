@extends('layouts.user')

@section('home-section')
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

  <div class="hero__content grid is-vertical is-vertically-centered has-text-center">
    
    <div class="col-lg-12 d-flex justify-content-center">
      @if($user->sex === 'Male')
      <lottie-player src="{{ asset('animations/2.json') }}" background="transparent"  speed="1"  style="width: 300px; height: 300px;" loop autoplay></lottie-player>
      @elseif($user->sex === 'Female')
      <lottie-player class="mb-5" src="{{ asset('animations/3.json') }}" background="transparent"  speed="1"  style="width: 250px; height: 250px;" loop autoplay "></lottie-player>
      @endIf
    </div>

    <div class="column is-full">
      <h1>Hello {{ Auth::user()->name }}</h1>
    </div>
    <div class="column is-11 is-desktop-9 is-desktop-x-8">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
    </div>
    <div class="column is-full">
      <div class="is-button-group has-centered">
        <a href="#" class="button is-primary">
          Portfolio
        </a>
        <a href="{{ route('profile.create') }}" class="button">
          Create Proflie
        </a>
      </div>
    </div>
  </div>
@endsection