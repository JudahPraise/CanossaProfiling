<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href = "{{ asset('img/favicon.ico') }}"/>
    <link rel="stylesheet" href="{{ asset('css/admin-login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel = "icon" href = "{{ asset('img/circle-logo.png') }}" type = "image/x-icon">
    <title>Admin</title>
</head>
<body>

    <div class="container-fluid background d-flex justify-content-center align-items-center w-100">
        <div class="row d-flex align-items-center glass">
            <div class="col-12 d-flex justify-content-start align-items-center flex-column">
                <div class="row d-flex justify-content-center align-items-center flex-column w-75">
                    <img class="logo" src="{{ asset('img/circle-logo.png') }}" alt="">
                    <h4 class="font-weight-bold mt-3" style="color: #3A5EAE;" >Canossa College | HRIS <span class="font-weight-normal"></span></h4>
                    <h3 class="font-weight-bolder" style="color: #3A5EAE;">Admin</h3>                    
                    <p class="font-weight-normal mt-2"  style="font-size: 1.2rem;">Sign in to start you session</p>
                    
                    <form class="mt-3 w-100 d-flex flex-column" method="POST" action="{{ route('admin.login.submit') }}">
                        @csrf

                        <div class="form-group">
                          <input id="email" type="email" class="form-control text-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">

                           @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                          <input id="password" type="password" class="form-control text-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                           @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="border-radius: .5rem;">Log in</button>

                    </form>
                </div>
                
            </div>
        </div> 
    </div>

</body>
</html>