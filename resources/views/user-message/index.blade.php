@extends('layouts.user')

@section('page_level_css')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection

@section('home-section')

<div class="hero__content grid is-vertical is-vertically-centered has-no-padding is-desktop-up">
    <div class="column is-full is-flex is-vertically-centered">

        <div class="row w-100 d-flex flex-column" style="margin-left: .1rem">
            <h3>Message</h3>
            <div class="row mt-3">
                <a href="{{ route('user-message.create') }}" class="btn btn-outline-primary rounded-pill m-2"><i class="far fa-paper-plane mr-2"></i>Send Message</a>
                <a href="{{ route('user-message.index') }}" class="btn btn-outline-info rounded-pill m-2"><i class="fas fa-inbox mr-2"></i>Inbox</a>
                <a href="{{ route('user-message.outbox') }}" class="btn btn-outline-success rounded-pill m-2"><i class="fas fa-box mr-2"></i>Sent Box</a>
            </div>
        </div>

        <div class="row w-100">
            @yield('user-message')
        </div>

    </div>
</div>

@endsection