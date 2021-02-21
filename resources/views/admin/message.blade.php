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
            <p class="w-75">You're able to notify employee through personal message or send to all depends on what department that you need to notify or send a message. You can attach file or link on your messages.</p>
            <div class="row mt-3">
                <a href="{{ route('message.create') }}" class="btn btn-outline-primary rounded-pill m-2"><i class="far fa-paper-plane"></i>Send Message</a>
                <a href="{{ route('message.inbox') }}" class="btn btn-outline-info rounded-pill m-2"><i class="fas fa-inbox"></i>Inbox</a>
                <a href="{{ route('message.outbox') }}" class="btn btn-outline-success rounded-pill m-2"><i class="fas fa-box"></i>Sent Box</a>
            </div>
        </div>
    </div>

</div>

@if(session()->has('success'))
  <div class="alert alert-dismissible fade-in alert-promt p-4 data-auto-dismiss d-flex justify-content-center" role="alert" id="alert" style="width: 25rem;">
    <span><i class="fas fa-check-circle mr-3" style="font-size: 1.5rem;"></i>{{ session('success') }}</span>
  </div>
@elseif(session()->has('delete'))
<div class="alert alert-dismissible fade-in alert-promt p-4 data-auto-dismiss d-flex justify-content-center" role="alert" id="alert" style="width: 25rem;">
  <span><i class="fas fa-trash mr-3" style="font-size: 1.5rem; color: rgb(170, 0, 0);"></i>{{ session('delete') }}</span>
</div>
@endif

<div class="row w-100 px-2 d-flex align-items-center justify-content-start">

    <div class="col-lg-12 mb-5">
        
        @yield('message')

    </div>

</div>


@endsection