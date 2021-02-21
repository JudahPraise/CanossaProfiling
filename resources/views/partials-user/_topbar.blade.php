<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<div class="top__brand" style="position: relative;">

    <div class="image is-tiny-square is-rounded top-wrapper">

      @if(!empty(Auth::user()->image))
      <img class="img" src="{{ asset('/storage/images/'.Auth::user()->image) }}" alt="">
      @else
          @if(auth()->user()->sex === 'Male')
            <lottie-player class="" src="{{ asset('animations/4.json') }}" background="transparent"  speed="1"  style="width: 93px; height: 93px; position: absolute; bottom: 0rem; top: -25px; left: -23px;" loop autoplay "></lottie-player>
          @elseif(auth()->user()->sex === 'Female')
            <lottie-player class="" src="{{ asset('animations/1.json') }}" background="transparent"  speed="1"  style="width: 93px; height: 93px; position: absolute; bottom: 0rem; top: -25px; left: -23px;" loop autoplay "></lottie-player>
        @endIf
      @endIf
      
      <div class="image is-tiny-square is-rounded top-overlay">

        <div class="is-file-input">

          <form action="{{ route('image.upload') }}" id="form" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" id="exampleFileInput" name="image" onchange="event.preventDefault();
            document.getElementById('form').submit();">
          </form>

          <label for="exampleFileInput" data-toggle="modal" data-target="#staticBackdrop">
            <span class="icon">
              <i class="fas fa-upload"></i>
            </span>
          </label>

        </div>

      </div>

    </div>

  </div>
  

  <div class="top__brand has-no-padding-left top-name">
    @can('has-employee')
    <h5 class="has-no-margin text-muted">{{ Auth::user()->employee->firstname }}</h5>
    @else
    <h5 class="has-no-margin text-muted">{{ Auth::user()->name }}</h5>
    @endCan
  </div>
  
  <div class="top__links is-end">
      
     <div class="column is-full">
         <ul class="has-no-list-style has-link-inherit">
              <li><a href="{{ route('home') }}">HOME</a></li>
              <li><a href="#portfolio">PORTFOLIO</a></li>
              <li><a href="#documents">DOCUMENTS</a></li>
             <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">{{ __('LOGOUT') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
             </li>
             <li>
              <a href="{{ route('user.update-password') }}">
                  {{ __('RESET PASSWORD') }}
              </a>
            </li>
         </ul>
     </div>   
     
     <div class="has-row-margin">
         {{-- <ul class="d-flex flex-row is-inline-list">
             <li><a href="#"><i class="fab fa-twitter"></i></a></li>
             <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
             <li><a href="#"><i class="fab fa-instagram"></i></a></li>
             <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
         </ul> --}}
         <div class="column is-full">
          <small class="has-text-muted">&copy; 2021 Canossa San Pablo HRIS</small>
         </div>
     </div>
  </div>

  <div class="top__burger has-animate is-end" onclick="this.closest('.top').classList.toggle('is-open')">
    <span></span>
  </div>
  