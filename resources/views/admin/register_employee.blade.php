@extends('layouts.admin')

@section('page_level_css')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection

@section('content')

<div class="row w-100 px-2 d-flex align-items-center justify-content-start">
  
  <div class="col-lg-3">
    <lottie-player src="{{ asset('animations/Add-user.json') }}" background="transparent"  speed="1"  style="width: 350px; height: 350px;" loop autoplay "></lottie-player>
  </div>

  <div class="col-lg-9">
    <div class="d-flex flex-column">
      <h3>Register Employee!</h3>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
      <div class="row mt-3">
        <a href="{{ route('register.employee') }}" class="btn btn-outline-primary rounded-pill mr-2"><i class="fas fa-user-plus"></i>Register Employee</a>
        <a href="{{ route('register.index') }}" class="btn btn-outline-info rounded-pill"><i class="fas fa-user-times"></i>Remove Employee</a>
      </div>
    </div>
  </div>

</div>

<div class="row w-100 px-2 d-flex align-items-center justify-content-center mb-4">

  <div class="col-lg-11">

    @yield('register-section')

  </div>

</div>
@endsection

@section('page_level_scripts')
    <script src="{{ asset('vendor/datatables/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/datatables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable({
                "bLengthChange": false,
          });
        });
    </script>
@endsection