<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="{{ asset('css/resume.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ $user->employee->lastname }}_Resume</title>
</head>
<body>

  {{-- Nav Bar --}}
  <nav class="navbar navbar-dark bg-dark">
    
    {{-- Navbar content --}}
    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="{{ asset('img/circle-logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
      Canossa HRIS
    </a>

    <a class="navbar-brand my-2 my-lg-0">
      <button class="btn btn-outline-success" type="button" id="download"><i class="fas fa-file-download mr-2"></i>Download</button>
      <button class="btn btn-outline-info" type="button" id="print"><i class="fas fa-print mr-2"></i>Print</button>
    </a>

  </nav>

  {{-- Main Container --}}
  <div class="container-fluid d-flex justify-content-center">
    {{-- Paper Container --}}
    <div class="container" id="paper">
      <div class="row d-flex mt-3">
        {{-- Profile Picture --}}
        <div class="col-5 d-flex align-items-center justify-content-center">
          @if(!empty(Auth::user()->image))
            <div class="image is-square is-medium-square is-rounded">
                <img class="img" src="{{ asset('/storage/images/'.Auth::user()->image) }}" alt="">
            </div>
          @else
          <div class="image is-square is-medium-square is-rounded d-flex justify-content-center align-items-center">
            @if($user->sex === 'Male')
              <lottie-player  src="{{ asset('animations/4.json') }}" background="transparent"  speed="1"  style="width: 250px; height: 250px; position: relative;" loop autoplay "></lottie-player>
            @elseif($user->sex === 'Female')
              <lottie-player src="{{ asset('animations/1.json') }}" background="transparent"  speed="1"  style="width: 250px; height: 250px;" loop autoplay "></lottie-player>
            @endIf
          </div>
          @endif
        </div>
        {{-- Basic Information --}}
        <div class="col-7 d-flex justify-content-center flex-column">
          <h3 class="font-weight-bold">{{ $user->employee->firstname." ".$user->employee->lastname }}</h3>
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

      <div class="divider mt-3 mb-3"></div>
      {{-- Academic --}}
      <div class="row d-flex flex-column w-100 ml-4">
        
        <h3 h3 class="font-weight-bold">Academic</h3>
        {{-- Elementary --}}
        <div class="row d-flex justify-content-center w-100 mt-2">
          @if(!empty($user->elementary))
          <div class="col-4">
            @if(!empty($user->elementary->level_units_earned))
            <h5>{{ $user->elementary->level_units_earned }}</h5>
            @else
            <h5>{{ $user->elementary->graduated_date_from->format('Y') }} <span> - </span> {{ $user->elementary->graduated_date_to->format('Y') }}</h5>
            @endif
          </div>
          <div class="col-2">
            <h5 class="font-weight-bold">Elementary</h5>
          </div>
          <div class="col-6">
            <h5>{{ $user->elementary->name_of_school }}</h5>
          </div>
          @else
          <div class="col-6">
            <h5 class="text-center text-muted">No Data</h5>
          </div>
          @endIf
        </div>
        {{-- Secondary --}}
        <div class="row d-flex justify-content-center w-100 mt-2">
          @if(!empty($user->secondary))
          <div class="col-4">
            @if(!empty($user->secondary->level_units_earned))
            <h5>{{ $user->secondary->level_units_earned }}</h5>
            @else
            <h5>{{ $user->secondary->graduated_date_from->format('Y') }} <span> - </span> {{ $user->secondary->graduated_date_to->format('Y') }}</h5>
            @endif
          </div>
          <div class="col-2">
            <h5 class="font-weight-bold">Secondary</h5>
          </div>
          <div class="col-6">
            <h5>{{ $user->secondary->name_of_school }}</h5>
          </div>
          @else
          <div class="col-6">
            <h5 class="text-center text-muted">No Data</h5>
          </div>
          @endif
        </div>
        {{-- College --}}
        <div class="row d-flex justify-content-center w-100 mt-2">
          @if(!empty($user->college))
          <div class="col-4">
            @if(!empty($user->college->level_units_earned))
            <h5>{{ $user->college->level_units_earned }}</h5>
            @else
            <h5>{{ $user->college->graduated_date_from->format('Y') }} <span> - </span> {{ $user->college->graduated_date_to->format('Y') }}</h5>
            @endif
          </div>
          <div class="col-2">
            <h5 class="font-weight-bold">College</h5>
          </div>
          <div class="col-6">
            <h5><span class="font-weight-bold">{{ $user->college->course_degree }}</span><br>{{ $user->college->name_of_school }}</h5>
          </div>
          @else
          <div class="col-6">
            <h5 class="text-center text-muted">No Data</h5>
          </div>
          @endif
        </div>
        {{-- Graduate Studies --}}
        <h5 class="font-weight-bold">Graduate Studies</h5>
        @forelse($user->graduate_studies as $graduate_study)
          <div class="row d-flex justify-content-center w-100 mt-2">
            <div class="col-4">
              <h5>{{ $graduate_study->graduated_date_from->format('Y') }} <span> - </span> {{ $graduate_study->graduated_date_to->format('Y') }}</h5>
            </div>
            <div class="col-2">
              <h5 class="font-weight-bold">{{ $graduate_study->degree }}</h5>
            </div>
            <div class="col-6">
              <h5><span class="font-weight-bold">{{ $graduate_study->course }}</span> <br> {{ $graduate_study->name_of_school }}</h5>
            </div>
          </div>
        @empty
          <div class="row d-flex justify-content-center w-100 mt-2">
            <h5 class="text-muted">No Data</h5>
          </div>
        @endforelse

        {{-- Work Experience --}}
        <div class="row d-flex flex-column w-100 mb-3 flex-lg-nowrap">
          
          <h3 h3 class="font-weight-bold ml-3">Work Experience</h3>

          @forelse($user->experiences as $experience)

            <div class="row d-flex justify-content-center w-100 mt-2 ml-1">
              <div class="col-4 mb-3">
                <h5>{{ $experience->date_from->format('Y') }} <span> - </span> {{ $experience->date_to->format('Y') }}</h5>
              </div>
              <div class="col-2 mb-3">
                <h5 class="font-weight-bold">{{ $experience->work_description }}</h5>
              </div>
              <div class="col-6 mb-3">
                <h5><span class="font-weight-bold">{{ $experience->work_place }}</span></h5>
              </div>
            </div>
            
          @empty
            <div class="row d-flex justify-content-center w-100 mt-2">
              <h5 class="text-muted">No Data</h5>
            </div>
          @endforelse
        </div>

        {{-- Traning Programs --}}
        <div class="row d-flex flex-column w-100 mb-3 flex-lg-nowrap">
          <h3 h3 class="font-weight-bold ml-3">Training Programs</h3>

          @forelse($user->trainings as $training)

            <div class="row d-flex justify-content-center w-100 mt-2 ml-1">
              <div class="col-4 mb-3">
                <h5>{{ $training->training_date->format('M d, Y') }}</h5>
              </div>
              <div class="col-5 mb-3">
                <h5 class="font-weight-bold">{{ $training->training_title }}</h5>
              </div>
              <div class="col-3 mb-3">
                <h5><span class="font-weight-bold">{{ $training->training_sponsor }}</span></h5>
              </div>
            </div>
            
          @empty
            <div class="row d-flex justify-content-center w-100 mt-2">
              <h5 class="text-muted">No Data</h5>
            </div>
          @endforelse
        </div>

        {{-- Voluntary Works --}}
        <div class="row d-flex flex-column w-100 mb-4 flex-lg-nowrap">
          <h3 h3 class="font-weight-bold ml-3">Voluntary Works</h3>

          @forelse($user->voluntary_works as $works)

            <div class="row d-flex justify-content-center w-100 mt-2 ml-1">
              <div class="col-3 mb-3">
                <h5>{{ $works->date_from->format('Y') }} <span> - </span> {{ $works->date_to->format('Y') }}</h5>
              </div>
              <div class="col-2 mb-3">
                <h5 class="font-weight-bold">{{ $works->no_hours }}</h5>
              </div>
              <div class="col-3 mb-3">
                <h5><span class="font-weight-bold">{{ $works->position }}</span></h5>
              </div>
              <div class="col-4 mb-3">
                <h5><span class="font-weight-bold">{{ $works->name_address }}</span></h5>
              </div>
            </div>
            
          @empty
            <div class="row d-flex justify-content-center w-100 mt-2">
              <h5 class="text-muted">No Data</h5>
            </div>
          @endforelse
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">

    var printBtn = document.getElementById("print");

    printBtn.addEventListener("click", function(){

    var printContents = document.getElementById('paper').innerHTML;
    window.print();

    });

    var downloadBtn = document.getElementById("download");

    downloadBtn.addEventListener("click", function(){

    var pdfContents = document.getElementById('paper').innerHTML;
    var filename = {!! json_encode($user->employee->lastname) !!};
    var opt = {
        margin:       .5,
        filename:     filename + '_' + 'resume.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
    };

    html2pdf().from(pdfContents).set(opt).save();

    });

  </script>

</body>
</html>