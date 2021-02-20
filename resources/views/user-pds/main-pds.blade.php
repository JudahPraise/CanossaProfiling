<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href = "{{ asset('img/favicon.ico') }}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/orbitcss/css/orbit.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/orbit-tooltips/css/tooltips.min.css">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/portfolio-back.css') }}">
    <title>OrbitCSS - Basic Portfolio Example</title>
    <style>

      .hero:not(:last-of-type), .top {
        border-bottom: 1.5px solid rgba(219,219,219,.36);
      }

      .mouse {
        border: 2px solid #393939;
        border-radius: 20px;
        height: 30px;
        margin: 30px auto 30px auto;
        width: 15px;
      }

      .mouse__scroll {
        background: #393939;
        border-radius: 8px;
        height: 5px;
        margin: auto auto;
        position: relative;
        width: 5px;
        -webkit-animation: scrollDownUp 3s infinite;
        animation: scrollDownUp 3s infinite;
      }

      @-webkit-keyframes scrollDownUp {
        0% {top: 5px;}
        50% {top: 15px;}
        100% {top: 5px;}
      }

      @keyframes scrollDownUp {
        0% {top: 5px;}
        50% {top: 15px;}
        100% {top: 5px;}
      }

      .nav-items{
        position: relative;
        top: 40%;
      }

      .wrapper{
        position: absolute;
        top: 5%;
        right: 20%
      }

      .overlay{
          position: absolute;
          top: 0;
          left: 0;
          bottom: 0;
          right: 0;
          opacity: 0;
          transition: .5 ease;
          background: rgba(121, 121, 121, 0.555);
      
          display: flex;
          justify-content: center;
          align-items: center;
          color: white;
          font-size: 1em;
      }


      .wrapper:hover .overlay{
          opacity: 1;
      }

      .top-wrapper{
        position: absolute;
        /* top: 10%;
        right: 85% */
      }

      .top-name{
        margin-left: 3.5em;
      }

      .top-overlay{
          position: absolute;
          top: 0;
          left: 0;
          bottom: 0;
          right: 0;
          opacity: 0;
          transition: .5 ease;
          background: rgba(121, 121, 121, 0.555);
      
          display: flex;
          justify-content: center;
          align-items: center;
          color: white;
          font-size: 1em;
      }


      .top-wrapper:hover .top-overlay{
          opacity: 1;
      }

      .profile-icon{
        color: white;
        font-size: 1.2rem;
        font-weight: 500;
      }

      .profile-icon:hover{
        color: white;
      }

    </style>

  </head>
  <body>

    @if(session()->has('message'))
      <div class="alert alert-dismissibl fade-in alert-promt p-4 data-auto-dismiss d-flex justify-content-center" role="alert" id="alert">
        <span><i class="fas fa-check-circle mr-3" style="font-size: 1.5rem;"></i>{{ session('message') }}</span>
      </div>
    @elseif(session()->has('delete'))
    <div class="alert alert-dismissibl fade-in alert-promt p-4 data-auto-dismiss d-flex justify-content-center" role="alert" id="alert">
      <span><i class="fas fa-trash mr-3" style="font-size: 1.5rem; color: rgb(170, 0, 0);"></i>{{ session('delete') }}</span>
    </div>
    @endif

    {{-- <a href="{{ url()->previous() }}" class="anchor">
      <div class="back d-flex align-items-center justify-content-center">
        <span class="icon">
          <i class="fas fa-caret-left"></i>
        </span>
      </div>
    </a> --}}

    <input type="checkbox" id="check" hidden>

            <label class="toggler d-flex align-items-center justify-content-around" for="check">
              <i class="fas fa-caret-left"></i>
            </label>
            
            <div class="icons d-flex align-items-center justify-content-center">

              <a href="{{ route('profile.index') }}" class="icon mr-4">
                <span class="d-flex flex-column align-content-lg-between">
                  <div class="image is-tiny-square is-rounded mt-3 profile" style="border: 2px solid white">
                    <img class="img" src="{{ asset('/storage/images/'.Auth::user()->image) }}" alt="">
                  </div>
                  <p style="font-size: 15px">Profile</p>
                </span>
              </a>

              <a href="{{ route('announcements') }}" class="icon mt-2">
                <span class="d-flex flex-column align-items-center ">
                  <i class="fas fa-envelope mt-3"></i>
                  <p class="mt-2" style="font-size: 15px">Announcements</p>
                  <span class="badge badge-danger text-center badge-ann">
                    <p>4</p>
                  </span>
                </span>
              </a>

              <a href="#" class="icon ml-4 mt-2 mr-5">
                <span class="d-flex flex-column align-items-center ">
                  <i class="fas fa-bullhorn mt-3"></i>
                  <p class="mt-2" style="font-size: 15px">Inbox</p>
                  <span class="badge badge-danger text-center badge-in">
                    <p>4</p>
                  </span>
                </span>
              </a>
              
            </div>

    {{-- Top Bar --}}
    <nav class="top is-tablet-down is-mobile-responsive nav-bar" id="navbar">
      @include('partials-user._topbar')
    </nav>


    <div class="grid has-no-col-padding " data-spy="scroll" data-target="#navbar">
      

      <div class="column is-shrink is-desktop-up" style="width: 250px; position: fixed;">

        @include('partials-user._sidebar')
        
      </div>


      <div class="column is-shrink has-no-padding is-desktop-up" style="width: 250px;"></div>

      <div class="column">
        <div class="container">
          
          <!--*Nav -->
          {{-- <nav class="top is-desktop-up">
            <div class="container is-vertically-centered">
              <div class="top__brand">
                <img width="250px" src="/img/logo.jpg">
              </div>
            </div>
          </nav> --}}


          <div class="hero" id="portfolio">
            <div class="hero__content grid has-link-inherit">
            
              @yield('portfolio')
        
            </div>         
          </div>

          
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function() {
    // show the alert
    setTimeout(function() {
        $(".alert").alert('close');
      }, 2000);
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="{{ asset('./js/main.js') }}"></script>
  </body>
</html>

