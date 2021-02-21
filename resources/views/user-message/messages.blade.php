@extends('user-message.index')

@section('user-message')
<div class="hero__content grid is-vertical is-vertically-centered has-no-padding is-desktop-up">
    <div class="column is-full is-flex is-vertically-centered">
        <h4>Inbox</h4>
        <div class="list-group" style="height: 25rem; overflow: auto; scroll-behavior: smooth;">
            @forelse($messages as $msg)
            <div class="list-group-item list-group-item-action">
                @if($msg->read === 'notread')
                <h5>Example heading <span class="badge badge-secondary">New</span></h5>
                @endIf
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">From: {{ $msg->sender }}</h5>
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
                    <a href="{{ route('user-message.download', $msg->id ) }}" class="btn btn-outline-info rounded-pill "><i class="fas fa-file-download mr-2"></i>{{ $msg->file }}</a>
                </div>
                @endif

                <a href="{{ route('user-message.markAsRead', $msg->id) }}" onclick="document.querySelector('.mark-read').submit();">Mark as read</a>

                <form action="{{ route('user-message.delete', $msg->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type='submit' class="btn btn-outline-danger rounded-pill float-right"><i class="fas fa-trash mr-2"></i>Delete</button>
                </form>
                
                <a href="{{ route('user-message.reply', $msg->sender) }}" class="btn btn-outline-success rounded-pill float-right mr-2"><i class="fas fa-reply mr-2"></i>Reply</a>

              </div>
            @empty
                <h5 class="text-center text-muted font-italic">No Message</h5>
            @endforelse
        </div>

    </div>
</div>


@endsection


