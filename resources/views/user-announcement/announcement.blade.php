@extends('layouts.user')

@section('home-section')
<div class="hero__content grid is-vertical is-vertically-centered has-no-padding">
    <div class="column is-full is-flex is-vertically-centered m-3">
        <h2 class="ml-1">Announcements</h2>
        <div class="list-group" style="height: 25rem; overflow: auto; scroll-behavior: smooth;">
          @forelse($announcements as $announcement)
          <a href="{{ route('user-announcement.show', $announcement->id) }}" class="list-group-item list-group-item-action">
            @if($announcement->read === 'notread')
                <h5>Example heading <span class="badge badge-secondary">New</span></h5>
                @endIf
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{ $announcement->ann_title }}</h5>
                <small>{{ $announcement->created_at->diffForHumans() }}</small>
              </div>
              <small>{{ \Carbon\Carbon::parse($announcement->ann_start)->format('M d,Y') }} - {{  \Carbon\Carbon::parse($announcement->ann_end)->format('M d,Y') }}</small>
              <p class="mb-1">{{ $announcement->ann_other }}</p>
              <small class="text-primary">{{ $announcement->ann_affected }}</small>
              <div class="row d-flex">
                  <div class="col-6" >
                      <div>
                          @if(!empty($announcement->link))
                              <small>Has Link: YES</small>
                          @else
                              <small>Has Link: NONE</small>
                          @endIf
                      </div>  
                      <div>
                          @if(!empty($announcement->attachment))
                              <small>Has Attachment: YES</small>
                          @else
                              <small>Has Attachment: NONE</small>
                          @endIf
                      </div>
                  </div>
      
                  <div class="col-lg-6 d-flex justify-content-end align-items-center">
                    
                    <form action="{{ route('user-announcement.markAsRead', $announcement->id) }}">
                        <button class="btn btn-sm btn-primary" type="submit">Mark as read</button>
                    </form>
                    
                  </div>
              </div> 
          </a>
      
         
          @empty
              <h3 class="text-center text-muted font-italic">No Announcement</h3>
          @endforelse
      </div>
    </div>
</div>
@endsection