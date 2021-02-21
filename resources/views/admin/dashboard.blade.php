@extends('layouts.admin')

@section('page_level_css')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection

@section('content')

<div class="row w-100 px-2 d-flex align-items-center justify-content-start">

    <div class="col-lg-3 px-5">
        <lottie-player src="{{ asset('animations/admin.json') }}" background="transparent"  speed="1"  style="width: 250px; height: 250px;" loop autoplay "></lottie-player>
    </div>

    <div class="col-lg-9">
        <div class="d-flex flex-column">
            <h3>Welcome Admin!</h3>
            <p class="w-75">You're able to see the total count of all the employees and every position. Click the cards below to view the list of employee based on their posiiton. Also you may able to see the profile of your selected employee by clicking the "view profile" button inside the table.</p>
        </div>
    </div>

</div>


@include('admin._counter')

<div class="row w-100 d-flex align-items-start justify-content-center" >

    <div class="col-lg-12">

        
        @yield('table-section')
    
    </div>

    {{-- <div class="col-lg-3">

        @include('admin._announcements')

    </div> --}}

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
        } );
    </script>
@endsection