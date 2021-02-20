@extends('user-pds.main-pds')

@section('portfolio') 
<link rel="stylesheet" href="{{ asset('css/pds.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">



<div class="container d-flex flex-column" id="paper" >
    <div class="row w-100 d-flex">
        <div class="col-5 d-flex align-items-center justify-content-center" id="profile">
            <div class="image is-square is-medium-square is-rounded"  >
                <img class="img" src="{{ asset('/storage/images/'.Auth::user()->image) }}" alt="">
            </div>
        </div>
        <div class="col-7 d-flex justify-content-center flex-column p-3" id="basicInfo">
            <h3>{{ $user->employee->firstname." ".$user->employee->lastname }}</h3>
            <h5>{{ $user->employee->employee_id }}</h5>
            <span><h6>{{ $user->employee->department."  ".$user->employee->position }}</h6></span>
            @if(!empty($user->personal))
              <h6 class=""><i class="fas fa-map-marker-alt mr-2"></i>{{ $user->personal->address }}</h6>
              <h6 class=""><i class="fas fa-envelope mr-2"></i>{{ $user->personal->email_address }}</h6>
              <h6 class=""><i class="fas fa-phone mr-2"></i>{{ $user->personal->cell_number }}</h6>
            @else
              <h6 class=""><i class="fas fa-map-marker-alt"></i>No data</h6>
              <h6 class=""><i class="fas fa-envelope"></i>No data</h6>
            @endIf
        </div>
    </div>

    <div class="divider"></div>

    <div class="row w-100 d-flex flex-column">
        {{-- Educational Background --}}

        <div class="col p-3 ml-3">
            <h3 class="font-weight-bold">Educational Background</h3>
            
            <h4 class="font-weight-bold mt-3">Elementary</h4>
            <h5>{{ $user->elementary->graduated_date_from }} <span> to </span> {{ $user->elementary->graduated_date_to }}</h5>
            <h5>{{ $user->elementary->name_of_school }}</h5>

            <h4 class="font-weight-bold mt-">Secondary</h4>
            <h5>{{ $user->secondary->graduated_date_from }} <span> to </span> {{ $user->secondary->graduated_date_to }}</h5>
            <h5>{{ $user->secondary->name_of_school }}</h5>

            <h4 class="font-weight-bold mt-2">College</h4>
            <h5>{{ $user->college->graduated_date_from }} <span> to </span> {{ $user->college->graduated_date_to }}</h5>
            <h5>{{ $user->college->course_degree }}<br>{{ $user->college->name_of_school }}</h5>

            <h4 class="font-weight-bold mt-2">Graduate Studies</h4>
            @forelse ($user->graduate_studies as $graduate_study)
                <h5>{{ $graduate_study->graduated_date_from }} <span> to </span> {{ $graduate_study->graduated_date_to }}</h5>
                <h5>{{ $graduate_study->course }} <br> {{ $graduate_study->name_of_school }}</h5>
            @empty
                <h5 style="text-align: center">no data</h5>
            @endforelse
        </div>
    </div>


</div>

<button type="button" onclick="printJS('paper', 'html', 'css')">
    Print Form
 </button>

<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
{{-- <script>
    function printDiv(divName){
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;

    }

    // var printBtn = document.getElementById("print");

    //     printBtn.addEventListener("click", function(){
    //         var printContents = document.getElementById('paper').innerHTML;
    //         window.print();
    //     });
</script> --}}

@endsection