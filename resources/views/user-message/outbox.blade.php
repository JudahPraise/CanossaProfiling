@extends('user-message.index')

@section('page_level_css')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection

@section('user-message')
<div class="hero__content grid is-vertical is-vertically-centered has-no-padding is-desktop-up">
    <div class="column is-full is-flex is-vertically-centered">
        <h4>Inbox</h4>
        <div class="list-group" style="height: 25rem; overflow: auto; scroll-behavior: smooth;">
            @forelse($messages as $msg)
            <div class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">To: {{ $msg->sender }}</h5>
                  <small>{{ $msg->created_at->diffForHumans() }}</small>
                </div>
                <p class="mb-1">{{ $msg->message }}</p>
        
                @if(!empty($msg->link))
                <div class="row d-flex flex-column align-items-start ml-1">
                    <label for="">Link:</label>
                    <a href="{{ $msg->link }}" >{{ $msg->link }}</a>
                </div>
                @endif
        
                @if(!empty($msg->file))
                <div class="row d-flex flex-column align-items-start ml-1">
                    <label for="">Attachment:</label>
                    <button class="btn btn-outline-info rounded-pill "><i class="fas fa-file-download mr-2"></i>{{ $msg->file }}</button>
                </div>
                @endif
              </div>
            @empty
                <h5 class="text-center text-muted font-italic">No Message</h5>
            @endforelse
        </div>

    </div>
</div>
@endsection


