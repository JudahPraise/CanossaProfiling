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
            <p class="w-75">You're able to create, update and delete announcement. You have to provide information that is needed for your announcement, in the "affected department" field your chosen department is the only one who can view the announcement. While if you choose "all" all the employee can view the announcment.</p>
            <div class="row mt-3">
                <a href="{{ route('announcement.create') }}" class="btn btn-outline-primary rounded-pill m-2"><i class="fas fa-plus"></i>Create Announcement</a>
                <a href="{{ route('announcement.index') }}" class="btn btn-outline-info rounded-pill m-2"><i class="fas fa-eye"></i>View Announcements</a>
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

<div class="row w-100 px-2 d-flex align-items-center justify-content-start mb-3">

    <div class="col-lg-12 my-5">
        
        @yield('announcement')

    </div>

</div>


@endsection
