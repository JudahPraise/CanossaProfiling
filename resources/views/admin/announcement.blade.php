@extends('layouts.admin')

@section('page_level_css')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdn.tiny.cloud/1/oblkppgh25rxwb7erhrjzhgylwd8jiv8m5znvnpmkjhy0lwr/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection

@section('content')

<div class="row w-100 px-2 d-flex align-items-center justify-content-start">

    <div class="col-lg-3">
        <lottie-player src="{{ asset('animations/announcement.json') }}" background="transparent"  speed="1"  style="width: 250px; height: 250px;" loop autoplay "></lottie-player>
    </div>

    <div class="col-lg-9">
        <div class="d-flex flex-column">
            <h3>Announcement</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
            <div class="row mt-3">
                <a href="{{ route('announcement.create') }}" class="btn btn-outline-primary rounded-pill m-2"><i class="fas fa-plus"></i>Create Announcement</a>
                <a href="{{ route('announcement.index') }}" class="btn btn-outline-info rounded-pill m-2"><i class="fas fa-eye"></i>View Announcements</a>
              </div>
        </div>
    </div>

</div>

<div class="row w-100 px-2 d-flex align-items-center justify-content-start mb-3">

    <div class="col-lg-12 my-5">
        
        @yield('announcement')

    </div>

</div>


@endsection
