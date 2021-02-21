@extends('layouts.admin')

@section('page_level_css')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection

@section('content')

<div class="row w-100 px-2 d-flex align-items-center justify-content-start">

    <div class="col-lg-3">
        <lottie-player src="{{ asset('animations/search.json') }}" background="transparent"  speed="1"  style="width: 250px; height: 250px;" loop autoplay "></lottie-player>
    </div>

    <div class="col-lg-9">
        <div class="d-flex flex-column">
            <h3>Search Filter</h3>
            <p class="w-75">You're able to search employee record based on specific categories. Click the button below for your chosen category.</p>
            <div class="row mt-3">
                <a href="{{ route('filter.personal') }}" class="btn btn-outline-primary rounded-pill m-2"><i class="fas fa-user-shield"></i>Personal Information</a>
                <a href="{{ route('filter.studies') }}" class="btn btn-outline-success rounded-pill m-2"><i class="fas fa-user-graduate"></i>Graduate Study</a>
              </div>
        </div>
    </div>

</div>

<div class="row w-100 px-2 d-flex align-items-center justify-content-start mb-3">

    <div class="col-lg-12 my-5">
        
        @yield('filter-search')

    </div>

</div>

@endsection