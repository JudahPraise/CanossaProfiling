@extends('layouts.user')

@section('home-section')

<div class="hero__content grid is-vertical is-vertically-centered has-no-padding">
    <div class="column is-full is-flex is-vertically-centered m-3">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h4 class="font-weight-bold">{{ $announcement->ann_affected }}</h4>
              <small class="float-right">{{ $announcement->created_at->diffForHumans() }}</small>
            </div>
            <div class="card-body">
                <h3 class="font-weight-bold">{{ $announcement->ann_title }}</h3>
                <h5>{{  \Carbon\Carbon::parse($announcement->ann_start)->format('M d,Y') }} - {{ \Carbon\Carbon::parse($announcement->ann_end)->format('M d,Y') }}</h5>
                <h5>{{ $announcement->ann_other }}</h5>
                @if(!empty($announcement->link))
                <h5>Link: <a href="{{ $announcement->link }}">{{ $announcement->link }}</a></h5>
                @else
                {{--  --}}
                @endif
                @if(!empty($announcement->link))
                <h5>Attachment: <a href="#">{{ $announcement->attachment }}</a></h5>
                @else
                {{--  --}}
                @endif
            </div>
          </div>
    </div>
</div>

@endsection