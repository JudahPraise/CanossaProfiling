@extends('user-pds.main-pds')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/personal.css') }}">
@endsection

@section('portfolio')

<div class="row d-flex w-100 ml-1 cont p-5">

    <div class="col-lg-8 d-flex align-items-center">
        <h1 style="font-size: 3rem; font-weight: bold;">Judah Praise D. De Ocampo</h1>
        
    </div>

    <div class="col-lg-4 d-flex justify-content-center align-items-center">
            @if(!empty(Auth::user()->image))
              {{-- <img class="img" src="{{ asset('/storage/images/'.Auth::user()->image) }}" alt=""style="border: 2px solid black"> --}}
              <img class="img p-3" src="{{ asset('/storage/images/'.Auth::user()->image) }}" alt="" style="width: 20rem; height: 20rem; border-radius: 3rem;">
            @else
              <div class="row d-flex justify-content-center align-items-start">
                @if(Auth::user()->sex === 'Male')
                  <lottie-player class="mb-5" src="{{ asset('animations/4.json') }}" background="transparent"  speed="1"  style="width: 350px; height: 350px;" loop autoplay "></lottie-player>
                @elseif(Auth::user()->sex === 'Female')
                  <lottie-player class="mb-5" src="{{ asset('animations/1.json') }}" background="transparent"  speed="1"  style="width: 350px; height: 350px;" loop autoplay "></lottie-player>
                @endIf
              </div>
            @endIf
    </div>

</div>

@endsection