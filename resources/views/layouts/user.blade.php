<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href = "{{ asset('img/favicon.ico') }}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/orbitcss/css/orbit.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/orbit-tooltips/css/tooltips.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('/css/user.css') }}">
    <script src="{{ asset('/js/bootstrap-datepicker.js') }}"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>{{ config('app.name')." "."| HRIS" }}</title>

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
        right: 20%;
        transition: opacity .5 ease;
        
      }

      .overlay{
          position: absolute;
          top: 3rem;
          left: .5rem;
          bottom: 0;
          right: 0;
          opacity: 0;
          transition: opacity .5 ease;
          background: rgba(121, 121, 121, 0.322);
          display: flex;
          justify-content: center;
          align-items: center;
          color: white;
          font-size: 1.5rem;
      }


      .wrapper:hover{
          opacity: 1;
      }

      .overlay:hover{
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
      <div class="alert alert-dismissible fade-in alert-promt p-4 data-auto-dismiss d-flex justify-content-center" role="alert" id="alert" style="width: 25rem;">
        <span><i class="fas fa-check-circle mr-3" style="font-size: 1.5rem;"></i>{{ session('message') }}</span>
      </div>
    @elseif(session()->has('delete'))
    <div class="alert alert-dismissible fade-in alert-promt p-4 data-auto-dismiss d-flex justify-content-center" role="alert" id="alert" style="width: 25rem;">
      <span><i class="fas fa-trash mr-3" style="font-size: 1.5rem; color: rgb(170, 0, 0);"></i>{{ session('delete') }}</span>
    </div>
    @endif
  

      {{-- Top Bar --}}
    <nav class="top is-tablet-down is-mobile-responsive" id="navbar">
      @include('partials-user._topbar')
    </nav>

    <div class="grid has-no-col-padding" data-spy="scroll" data-target="#navbar">
        
        <div class="column is-shrink is-desktop-up" style="width: 250px; position: fixed;">

          @include('partials-user._sidebar')
          
        </div>

      <div class="column is-shrink has-no-padding is-desktop-up" style="width: 250px;"></div>

      <div class="column">
        <div class="container">
          <!--*Home  -->
          <div class="hero is-full" id="home" >

            <div class="container  d-flex justify-content-center mt-5">
              <div class="top__brand">
                <img width="350px" src="/img/logo.jpg">
              </div>
            </div>


            @yield('home-section')


            <div class="hero__footer">  
              <div class="mouse">
                <div class="mouse__scroll"></div>
              </div>
            </div>

            <input type="checkbox" id="check" hidden>

            <label class="toggler d-flex align-items-center justify-content-around" for="check">
              <i class="fas fa-caret-left"></i>
            </label>
            
            <div class="icons d-flex align-items-center justify-content-center">
              @if(!empty(auth()->user()->employee))
              <a href="{{ route('profile.index') }}" class="icon mr-4">
                <span class="d-flex flex-column align-content-lg-between">
                  <div class="image is-tiny-square is-rounded mt-3 profile" style="border: 2px solid white">
                    @if(!empty(Auth::user()->image))
                        <img class="img" src="{{ asset('/storage/images/'.Auth::user()->image) }}" alt="">
                    @else
                        @if($user->sex === 'Male')
                          <lottie-player class="" src="{{ asset('animations/4.json') }}" background="transparent"  speed="1"  style="width: 93px; height: 93px; position: absolute; bottom: 0rem; right: 13.8rem; top: -13.6px;" loop autoplay "></lottie-player>
                        @elseif($user->sex === 'Female')
                          <lottie-player class="" src="{{ asset('animations/1.json') }}" background="transparent"  speed="1"  style="width: 93px; height: 93px; position: absolute; bottom: 0rem; right: 13.8rem; top: -13.6px;" loop autoplay "></lottie-player>
                        @endIf
                    @endIf
                    
                  </div>
                  <p style="font-size: 15px">Profile</p>
                </span>
              </a>
              @else
              <a href="{{ route('profile.create') }}" class="icon mr-4">
                <span class="d-flex flex-column align-content-lg-between">
                  <div class="image is-tiny-square is-rounded mt-3 profile" style="border: 2px solid white">
                    <img class="img" src="{{ asset('/storage/images/'.Auth::user()->image) }}" alt="">
                    {{-- <div class="row d-flex justify-content-center align-items-start" style="border: 2px solid black; position: absolute; top: 0;"> --}}
                      @if($user->sex === 'Male')
                      <lottie-player class="" src="{{ asset('animations/4.json') }}" background="transparent"  speed="1"  style="width: 93px; height: 93px; position: absolute; bottom: 0rem; right: 13.8rem; top: -13.6px;" loop autoplay "></lottie-player>
                      @elseif($user->sex === 'Female')
                      <lottie-player class="" src="{{ asset('animations/1.json') }}" background="transparent"  speed="1"  style="width: 93px; height: 93px; position: absolute; bottom: 0rem; right: 13.8rem; top: -13.6px;" loop autoplay "></lottie-player>
                      @endIf
                    {{-- </div> --}}
                  </div>
                  <p style="font-size: 15px">Profile</p>
                </span>
              </a>
              @endIf
            @if(Auth::check())
              <a href="{{ route('announcements') }}" class="icon mt-2">
                <span class="d-flex flex-column align-items-center ">
                  <i class="fas fa-bullhorn mt-3 rotate-n-15"></i>
                  <p class="mt-2" style="font-size: 15px">Announcements</p>           
                  @if($announcement_count)
                    <span class="badge badge-danger text-center badge-ann">
                      <p>{{ $announcement_count }}</p>
                    </span>
                  @endIf
                </span>
              </a>
            @endIf

              <a href="{{ route('message.index') }}" class="icon ml-4 mt-2 mr-5">
                <span class="d-flex flex-column align-items-center ">
                  <i class="fas fa-envelope mt-3"></i>
                  <p class="mt-2" style="font-size: 15px">Inbox</p>
                  {{-- <span class="badge badge-danger text-center badge-in">
                    <p>4</p>
                  </span> --}}
                </span>
              </a>
              
            </div>

          </div>

          <div class="hero" id="portfolio">
            <div class="hero__content grid has-link-inherit">
        
              <div class="col-md-12">
                <h2>Portfolio</h2>
              </div>
              
              <div class="row d-flex align-items-center w-100 ml-1">
                <div class="card-group">
                    <div class="card m-2 shadow bg-white rounded">
                      <img src="{{ asset('img/portfolio-cards/personal-information.png') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h6 class="card-title">Personal Information</h6>
                        <a href="{{ route('personal.index') }}" class="btn btn-primary text-white">Edit</a>
                      </div>
                    </div>  
              
                    <div class="card m-2 shadow bg-white rounded">
                      <img src="{{ asset('img/portfolio-cards/family-background.png') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h6 class="card-title">Family Background</h6>
                        <a href="{{ route('family.index') }}" class="btn btn-primary text-white">Edit</a>
                      </div>
                    </div>
              
                    <div class="card m-2 shadow bg-white rounded">
                      <img src="{{ asset('img/portfolio-cards/educational-background.png') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h6 class="card-title">Educational Background</h6>
                        <a href="{{ route('elementary.index') }}" class="btn btn-primary text-white">Edit</a>
                      </div>
                    </div>
                </div>
            
                <div class="card-group">            
                  <div class="card m-2 shadow bg-white rounded">
                    <img src="{{ asset('img/portfolio-cards/work-experience.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title">Work Experience</h6>
                      <a href="{{ route('work.index') }}" class="btn btn-primary text-white">Edit</a>
                    </div>
                  </div>
              
                  <div class="card m-2 shadow bg-white rounded">
                    <img src="{{ asset('img/portfolio-cards/voluntary-works.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title">Voluntary Works</h6>
                      <a href="{{ route('voluntary.index') }}" class="btn btn-primary text-white">Edit</a>
                    </div>
                  </div>

                  <div class="card m-2 shadow bg-white rounded">
                    <img src="{{ asset('img/portfolio-cards/training.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title">Training Programs</h6>
                      <a href="{{ route('training.index') }}" class="btn btn-primary text-white">Edit</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>         
          </div>

          <!--*Other Documents -->
          <div class="hero">
            <div class="hero__content grid has-centered">
              <div class="column is-12 ml-5">
                <h2>Documents</h2>
              </div>

              <div class="row d-flex align-items-center w-100 ml-1">
                <div class="col-lg-12">
                  <div class="accordion" id="accordionExample">
                    <div class="card card-danger">
                      <div class="card-header bg-white" id="headingOne">
                        <div class="mb-0 d-flex justify-content-between">
                          <h5 class="font-weight-bold">List of Documents</h5>
                          <button class="btn btn-link text-left" id="plusMinusBtn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fas fa-minus" id="toggleIcon"></i>
                          </button>
                        </div>
                      </div>

                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                          <table id="datatable" class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Document Name</th>
                                <th scope="col">Filename</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>

                              @forelse($user->documents as $document)
                                <tr class="data-row">
                                  <td scope="row">{{ $document->id }}</td>
                                  <td>{{ $document->type_document }}</td>
                                  <td>{{ $document->document_filename }}</td>
                                  <td>
                                    <div class="d-flex align-items-center">
                                      <a href="{{ route('document.download', $document->id) }}" class="btn btn-success mr-3">Download</a>
                                      <form action="{{ route('document.delete', $document->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type='submit' class="btn btn-danger">Delete</button>
                                      </form>
                                    </div>
                                  </td>
                                </tr>
                              @empty
                                <tr>
                                  <td colspan="4" class="text-center"><p class="text-primary">Please Upload your documents</p></td>
                                </tr>
                              @endforelse
                            
                            </tbody>
                          </table>

                          <div class="row d-flex justify-content-center">
                            <span class="text-muted">*If you want to update your documents just delete the old document then insert the new document bellow</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card-group">
                  <div class="card m-3 shadow bg-white rounded">
                    <div class="card-body">
                      <h5 class="card-title">PDS</h5>
                      <p class="card-text">You can print and download your resume here.</p>
                      <a href="{{ route('resume.index') }}" class="btn btn-primary"><i class="fas fa-file-pdf mr-2"></i>View Resume</a>
                      {{-- <a href="{{ route('profile.index') }}" class="btn btn-primary"><i class="fas fa-download mr-2"></i>Download File</a> --}}
                    </div>
                  </div>
                    
                  <div class="card m-3 shadow bg-white rounded">
                    <div class="card-body">
                      <h5 class="card-title">Birth Certificate</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <button type="button" class="btn btn-primary birthBtn" data-toggle="modal" data-target="#modalInsert">
                        <i class="fas fa-paperclip mr-2"></i>Attach File
                      </button>
                           
                    </div>
                  </div>
        
                  <div class="card m-3 shadow bg-white rounded">
                    <div class="card-body">
                      <h5 class="card-title">Marriage Certificate</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <button type="button" class="btn btn-primary marriageBtn" data-toggle="modal" data-target="#modalInsert">
                        <i class="fas fa-paperclip mr-2"></i>Attach File
                      </button>
                    </div>
                  </div>
                </div>


                <div class="card-group">
                      {{-- Baptismal --}}
                  <div class="card m-3 shadow bg-white rounded">
                    <div class="card-body">
                            <h5 class="card-title">Baptismal Certificate</h5>
                            <p class="card-text">You can print and download your resume here.</p>
                            <button type="button" class="btn btn-primary baptismalBtn" data-toggle="modal" data-target="#modalInsert">
                              <i class="fas fa-paperclip mr-2"></i>Attach File
                            </button>
                    </div>
                  </div>
                  {{-- NBI Clearance --}}
                  <div class="card m-3 shadow bg-white rounded">
                    <div class="card-body">
                            <h5 class="card-title">NBI Clearance</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <button type="button" class="btn btn-primary nbiBtn" data-toggle="modal" data-target="#modalInsert">
                              <i class="fas fa-paperclip mr-2"></i>Attach File
                            </button>
                    </div>
                  </div>
                  {{-- Marriage Certificate --}}
                  <div class="card m-3 shadow bg-white rounded">
                    <div class="card-body">
                      <h5 class="card-title">College Diploma</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modalInsert">
                        <i class="fas fa-paperclip mr-2"></i>Attach File
                      </button>
                    </div>
                  </div>

                      <!-- Modal Insert -->
                  <div class="modal fade" id="modalInsert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Attach File</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                            
                        <div class="modal-body" id="modalBody">
                          <label class="fileLabel" for="file" id="fileLabel">Hello</label>
                          <form action="{{ route('document.submit') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="custom-file" >
                            <input type="text" name="type_document" id="fileType" hidden>
                            <input type="file" class="custom-file-input" name="document_filename" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose File</label>
                          </div> 
                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
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

    <script>
    $(document).ready(function() {

      setTimeout(function(){
        $(".alert").alert('close');
      }, 2000);

    });
    </script>

    <script src="{{ asset('./js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="bootstrap-auto-dismiss-alert.js"></script>

  </body>
</html>

