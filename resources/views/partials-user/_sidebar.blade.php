<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<div class="card has-no-shadow has-centered" style="height: 100vh; margin:0;" >

  <div class="card__content grid is-vertical">
    <div class="column is-shrink" style="margin-right: auto;">
      <div class="image is-square is-medium-square is-rounded is-center wrapper">
        @if(!empty(Auth::user()->image))
          <img class="img" src="{{ asset('/storage/images/'.Auth::user()->image) }}" alt="">
        @else
          <div class="row d-flex justify-content-center align-items-start">
            @if($user->sex === 'Male')
              <lottie-player class="mb-5" src="{{ asset('animations/4.json') }}" background="transparent"  speed="1"  style="width: 250px; height: 250px;" loop autoplay "></lottie-player>
            @elseif($user->sex === 'Female')
              <lottie-player class="mb-5" src="{{ asset('animations/1.json') }}" background="transparent"  speed="1"  style="width: 250px; height: 250px;" loop autoplay "></lottie-player>
            @endIf
          </div>
        @endIf
        <div class="image is-square is-medium-square is-rounded overlay">
          <div class="is-file-input">
            <form action="{{ route('image.upload') }}" id="form" method="POST" enctype="multipart/form-data">
              <input type="file" id="exampleFileInput" name="image" onchange="event.preventDefault();
              document.getElementById('form').submit();">
            </form>
            <label for="exampleFileInput" data-toggle="modal" data-target="#staticBackdrop">
              <span class="icon">
                <i class="fas fa-upload"></i>
              </span>
              <span>Upload File</span>
            </label>
          </div>
        </div>
      </div> 
    </div>
    <div class="column grid has-no-padding-top has-no-padding-left has-no-padding-right is-vertical">
      <div class="column is-full is-center nav-items">
       <ul class="has-no-list-style has-link-inherit">
         <li class="m-2"><a href="{{ route('home') }}">HOME</a></li>
         <li class="m-2"><a href="#portfolio">PORTFOLIO</a></li>
         <li class="m-2"><a href="#documents">DOCUMENTS</a></li>
         <li class="m-2">
            <a href="{{ route('user.logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">{{ __('LOGOUT') }}</a>
            <form id="logout-form" action="{{ route('user.logout') }}" method="POST" class="d-none">
                @csrf
            </form>
         </li>
         <li class="m-2">
           <a href="{{ route('user.update-password') }}">
               {{ __('RESET PASSWORD') }}
           </a>
         </li>
       </ul>
        </div>
    </div>
  </div>

    <div class="card__footer grid has-link-inherit">
      {{-- <div class="column is-full">
        <ul class="is-inline-list">
          <li><a href="#" data-toggle="tooltip" title="Tooltip on top"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#" data-toggle="tooltip" title="Tooltip on top"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#" data-toggle="tooltip" title="Tooltip on top"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#" data-toggle="tooltip" title="Tooltip on top"><i class="fab fa-linkedin"></i></a></li>
        </ul>
      </div> --}}
      <div class="column is-full has-no-padding-top">
        <small class="has-text-muted">&copy; 2021 Canossa San Pablo HRIS</small>
      </div>
    </div>
</div>