@extends('layouts.admin')

@section('page_level_css')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection

@section('content')

<div class="row w-100 px-2 d-flex align-items-center justify-content-start">

    <div class="col-lg-3 px-5">
        <lottie-player src="{{ asset('animations/inbox.json') }}" background="transparent"  speed="1"  style="width: 250px; height: 250px;" loop autoplay "></lottie-player>
    </div>

    <div class="col-lg-9">
        <div class="d-flex flex-column">
            <h3>Message</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
        </div>
    </div>

</div>

<div class="row w-100 px-2 d-flex align-items-center justify-content-start">

    <div class="col-lg-4 d-flex flex-column">
        <a href="{{ route('message.create') }}" class="btn btn-success m-3 btn-lg">Send Message</a>
        <button class="btn btn-primary m-3 btn-lg">View Message</button>
    </div>

    <div class="col-lg-8 mb-5">
        
        @yield('message')

    </div>

</div>


@endsection