<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- Animate -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('./css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/carousel.css') }}">

    <title>{{ config('app.name') }}</title>
  
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-white nav-bar-width fixed-top nav-header">
    <a class="navbar-brand" href="#">
      <img src="./img/logo.jpg" width="255" height="58" alt="Canossa San Pablo Logo" loading="lazy">
    </a>

    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto hover">
          <li class="nav-item active">
            <a class="nav-link li-hover" href="#home">Home<span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="#course">Courses</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#announcements">Announcements</a>
          </li>
          
          <li class="nav-item">
              <a class="nav-link" href="#contacts">Contact</a>
          </li>
          @if (Route::has('login'))
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">HRIS</a>
          </li>
          @endif
      </ul>
    </div>
  </nav>   
      
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
          <img class="bd-placeholder-img" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg"height="100%" width="100%" alt="" preserveAspectRatio="xMidYMid slice">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"height="100%" width="100%" alt="" preserveAspectRatio="xMidYMid slice">
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"height="100%" width="100%" alt="" preserveAspectRatio="xMidYMid slice">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
      
  <div class="row d-flex flex-column justify-content-center align-items-center" id="about">
    <div class="row">
      <h1>About Us</h1>
    </div>
    
    <div class="container">    
      <div class="row">
        <div class="col-md-7">
          <h2 class="heading">Canossa College</h2>
          <h3><span class="text-muted">San Pablo City</span></h3>
          <p class="lead">Canossa College of San Pablo City’s facilities are well-designed and properly maintained to meet students’ needs to effectively enhance learning and to help them enjoy their school lives. Located in a fully Air-conditioned room at the 2nd floor of the St. Magdalene of Canossa Building is the speech laboratory equipped with more than 50 0f the latest model to hone the English speaking skills of the students.</p>
        </div>
        <div class="col-md-5">
          <img  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="./img/image_1.jpg" width="500" height="500" alt="">
        </div>
      </div>
  
      <hr class="divider">
  
      <div class="row" data-aos="fade-left">
        <div class="col-md-7 order-md-2">
          <h2 class="heading">Our Vision</h2>
          <p class="lead">Canossa College in the City of San Pablo is a nurturing community of learners who develop the fullest capacity of their hearts for the service of the family, community, the church, nation and Mother Earth.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="./img/image_2.jpg" width="500" height="500" alt="">
        </div>
      </div>
  
      <hr class="divider">
  
      <div class="row" data-aos="fade-right">
        <div class="col-md-7">
          <h2 class="heading">Our Mission</h2>
          <p class="lead">Guided by the Spirit of Jesus Crucified and inspired by St. Magdalene of Canossa and rooted in filipino traditions and Catholic identity, we commit ourselves to nurture learners through an education centered on the formation of the heart that listens, thinks, discerns, and shares.</p>
        </div>
        <div class="col-md-5">
          <img  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="./img/image_3.jpg" width="500" height="500" alt="">
        </div>
      </div>
  
      <hr class="divider">
    </div>
  </div>
    
  <div class="row d-flex flex-column justify-content-center align-items-center" id="course">

    <div class="container-fluid d-flex flex-column justify-content-center align-items-center">

      <div class="row">
        <h1>Academics</h1>
      </div>

      <div class="row d-flex justify-content-center align-items-center">

        <div class="card" style="width: 16rem;" data-aos="flip-left">
          <img src="./img/pexels-pragyan-bezbaruah-1720188.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <h5 class="card-title">Pre-Elementary</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk thecard's  content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>

        <div class="card" style="width: 16rem;" data-aos="flip-right">
          <img src="{{ asset('./img/pexels-agung-pandit-wiguna-3401403.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <h5 class="card-title">Elementary</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk thecard's  content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>

        <div class="card" style="width: 16rem;" data-aos="flip-left">
          <img src="./img/pexels-jeswin-thomas-3380743.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <h5 class="card-title">Junior High School</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk thecard's  content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>

        <div class="card" style="width: 16rem;" data-aos="flip-right">
          <img src="./img/pexels-kobe-michael-1516440.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <h5 class="card-title">Senior High School</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk thecard's  content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>

        <div class="card" style="width: 16rem;" data-aos="flip-left">
          <img src="./img/pexels-kobe-michael-1516440.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <h5 class="card-title">College</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the buofthecard's   content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <div class="row d-flex flex-column justify-content-center align-items-center" id="announcements">
    <div class="row">
      <h1>Latest Announcements</h1>
    </div>
    
    <div class="row row d-flex justify-content-center align-items-center">
      <div class="container-fluid row d-flex justify-content-center align-items-center">
        <div class="card" style="width: 18rem;" data-aos="zoom-in">
          <img src="{{ asset('img/paterns/Aare.png') }}" class="card-img-top" alt="..." >
          <div class="card-body">
            <h5 class="card-title">Class Suspension</h5>
            <h5 class="text-primary">Nov. 10 2020</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;" data-aos="zoom-in">
          <img src="{{ asset('img/paterns/Linth.png') }}" class="card-img-top" alt="..." >
          <div class="card-body">
            <h5 class="card-title">First Friday Mass</h5>
            <h5 class="text-primary">Nov. 13 2020</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;" data-aos="zoom-in">
          <img src="{{ asset('img/paterns/Thur.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">College: Final Exam</h5>
            <h5 class="text-primary">Nov. 16-18 2020</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;" data-aos="zoom-in">
          <img src="{{ asset('img/paterns/Reuss.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Elem: Fourth Quarter Exam</h5>
            <h5 class="text-primary">Nov. 19-20 2020</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row d-flex flex-column justify-content-center align-items-center" id="contacts" data-aos="zoom-in-up">
    <div class="container">  
      <hr class="divider">

      <div class="row d-flex flex-column justify-content-center align-items-center">
        <div class="col-md-12 text-center">
          <h1 class="heading">Contact Our Office</h1>
          <p class="lead">We're here to help and answer any question you might have. We look forward to hearing from you.</p>

          <div class="row d-flex justify-content-center align-items-center">

            <div class="col-md-6">
              <ul class="contact-links">
                <li class="contact-link"><i class="fas fa-map-marker-alt"></i>Address</li>
                <li class="contact-link"><i class="fas fa-envelope"></i>Email</li>
              </ul>
            </div>

            <div class="col-md-6">
              <ul class="contact-links">
                <li class="contact-link"><i class="fas fa-phone"></i>Telephone No.</li>
                <li class="contact-link"><i class="fas fa-moble"></i>Cellphone No.</li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row d-flex flex-row justify-content-center align-items-center row-map" data-aos="zoom-out"> 

    <div class="col-md-12 text-center">
      <h1 class="heading hear-from-you">We'd love to hear from you</h1>
      <p class="lead">We're here to help and answer any question you might have. We look forward to hearing from you.</p>
    </div>

    <div class="col-md-3 p-2 m-2 d-flex flex-column flex-row justify-content-center">
      <h2 class="heading">Get In Touch</h2>

      <form>

        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="YourName">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Your Email">
        </div>
        
        
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Example textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>

    <div class="col-md-3 p-2 m-2 d-flex flex-row justify-content-center">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7740.0198126992345!2d121.3212005730941!3d1076592278483542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f11!3m3!1m2!1s0x33bd5cc571425e69%3A0x8b94ffb728c228e3!2sCanossa%20College!5e0!3m2!1sen!2sph!4v1605021616962!5m2!1sen!2sph" frameborder="0" style="border:0; margin:0; padding:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>

  <div class="container-fluid sticky-top d-flex flex-column">
    {{-- <div class="container-fluid h-100 d-flex flex-column justify-content-end align-items-center footer-container">

      <div class="row d-flex flex-column align-self-center justify-content-center">
        <h3 class="text-center text-white">Canossa College San Pablo</h3>
        <p class="text-center text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      </div>
  
      <div class="row d-flex justify-content-center">
        <a href="#" class="social-text" data-toggle="tooltip" title="Twitter"><i class="fab fa-twitter social-icon "></i></a>
        <a href="#" class="social-text" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f social-icon"></i></a>
        <a href="#" class="social-text" data-toggle="tooltip" title="Instagram"><i class="fab fa-instagram social-icon"></i></a>
        <a href="#" class="social-text" data-toggle="tooltip" title="Linkedin"><i class="fab fa-linkedin social-icon"></i></a>
      </div>

      <div class="row">
        <small class="text-white">&copy; 2020 CanossaSanPablo</small>
      </div>
    </div> --}}
  </div>

  <footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
    <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.5/getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset: 400,
        duration: 800
      });

      $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
      });
    </script>

</body>
</html>

{{-- <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif --}}
