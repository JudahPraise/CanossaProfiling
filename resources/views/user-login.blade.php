<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href = "{{ asset('img/favicon.ico') }}"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user-login.css') }}">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <title>{{ config('app.name') }}</title>

</head>
<body>
    <div class="container-fluid background d-flex justify-content-end w-100 m-0">
        <div class="row announcement d-flex flex-column">
            <h5 class="title"><i class="fas fa-quote-left mr-3"></i>Announcements</h5>
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  @forelse($announcements as $announcement)
                    <div class="carousel-item {{ $loop->first ? ' active' : '' }}" data-interval="2000">
                      <div class="row ml-3 mt-2 d-flex flex-column align-items-lg-start">
                          <h1>{{ $announcement->ann_title }}</h1>
                          <span class="d-flex">
                            <h5 class="mr-2">Date: </h5>
                            <h5 class="mr-2 text-white">{{ $announcement->ann_start }}</h5>
                            <h5>-</h5>
                            <h5 class="ml-2 text-white">{{ $announcement->ann_end }}</h5>
                          </span>
                          <a href="">Show more</a>
                      </div>
                    </div>
                  @empty
                      
                  @endforelse
                </div>
              </div>
        </div>

        <div class="row glass">
            
            <div class="col-12 d-flex pt-2 justify-content-start align-items-center flex-column">
                <div class="row d-flex justify-content-center align-items-center flex-column">
                    <img class="logo mt-5" src="{{ asset('img/circle-logo.png') }}" alt="">
                    <h2 class="font-weight-bold mt-3" style="color: #3A5EAE; font-size: 1.8rem;">Canossa HRIS</h2>
                    <p class="font-weight-normal mt-2"  style="font-size: 1.2rem;">Sign in to start you session</p>
                </div>
                

                <div class="row w-75">
                    @yield('login-form')
                </div>

                <div class="row w-75 mt-5">
                    <p style="text-align: center;">By using this service, you understood and agree to the PUP Online Services <a href="">Terms of Use</a> and <a href="">Privacy Statement</a>.</p>
                </div>
                
            </div>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"  integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"  crossorigin="anonymous"></script>
    <script src="validator.js"></script>
</body>
</html>