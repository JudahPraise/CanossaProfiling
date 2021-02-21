@extends('admin.message')

@section('page_level_css')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

@endsection

@section('message')

<h3>Outbox</h3>
<div class="list-group" style="height: 25rem; overflow: auto; scroll-behavior: smooth;">
    @forelse($messages as $msg)
    <div class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
          @if(!empty($msg->send_to))
          <h5 class="mb-1">To: {{ $msg->send_to }}</h5>
          @else
          <h5 class="mb-1">To: {{ $msg->send_to_all }}</h5>
          @endif
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
            <label for="">Attachment</label>
            <button class="btn btn-outline-info rounded-pill "><i class="fas fa-file-download"></i>{{ $msg->file }}</button>
        </div>
        @endif

        <form action="{{ route('message.delete', $msg->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type='submit' class="btn btn-outline-danger rounded-pill float-right"><i class="fas fa-trash mr-2"></i>Delete</button>
        </form>
        
      </div>
    @empty
        
    @endforelse
</div>

  @endsection


