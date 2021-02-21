@extends('user-pds.main-pds')

@section('portfolio')
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

  <div class="hero__content grid is-vertical is-vertically-centered has-text-center">
    
    <div class="col-lg-12 d-flex justify-content-center">
      @if(Auth::user()->sex === 'Male')
      <lottie-player src="{{ asset('animations/2.json') }}" background="transparent"  speed="1"  style="width: 300px; height: 300px;" loop autoplay></lottie-player>
      @elseif(Auth::user()->sex === 'Female')
      <lottie-player class="mb-5" src="{{ asset('animations/3.json') }}" background="transparent"  speed="1"  style="width: 250px; height: 250px;" loop autoplay "></lottie-player>
      @endIf
    </div>

    <div class="column is-full">
      <h1>Hello <span class="has-text-primary">{{ Auth::user()->getFullname() }}</span></h1>
    </div>
    <div class="column is-11 is-center is-desktop-9 is-desktop-x-8">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
    </div>
    <div class="column is-full">
      <div class="is-button-group has-centered">
        <a href="{{ route('personal.create') }}" class="button is-outline is-primary">
          Add Personal Information
        </a>
      </div>
    </div>
  </div>
@endsection