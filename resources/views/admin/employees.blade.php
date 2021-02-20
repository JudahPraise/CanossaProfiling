@extends('layouts.admin')

@section('content')
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<div class="container-fluid">

    <div class="row d-flex w-100 align-items-center justify-content-center justify-content-lg-start"> 
        @foreach($employees as $employee)
        <div class="col-mb-3 mb-3">
           <div class="card is-rounded">   
               <div class="card-body d-flex flex-column">
                    <div class="image is-medium-square is-rounded align-self-center">
                        @if(!empty($employee->user->image))
                            <img class="img" src="{{ asset('/storage/images/'.$employee->user->image) }}" alt="">
                        @else
                            <div class="row d-flex justify-content-center align-items-start">
                                @if($employee->user->sex === 'Male')
                                    <lottie-player src="{{ asset('animations/4.json') }}" background="transparent"  speed="1"  style="width: 250px; height: 250px; position: absolute; top: -2rem; right: 4 rem;" loop autoplay "></lottie-player>
                                @elseif($employee->user->sex === 'Female')
                                    <lottie-player src="{{ asset('animations/1.json') }}" background="transparent"  speed="1"  style="width: 250px; height: 250px; position: absolute; top: -2rem; right: 4 rem;" loop autoplay "></lottie-player>
                                @endIf
                            
                            </div>
                        @endIf
                    </div>      
                            
                    <h5 class="m-2 text-primary text-center p-2">{{ $employee->firstname." ".  $employee->middlename." ".$employee->lastname }}</h5>
                            

                    <div class="col d-flex flex-column justify-content-cent er align-items-center">
                         <h5>Department</h5>
                         <h6 class="text-primary">{{ $employee->department }}</h6>
                    </div>
                            
                    <div class="col d-flex flex-column justify-content-center align-items-center">
                          <h5>Position</h5>
                          <h6 class="text-primary">{{ $employee->position }}</h6>
                    </div>
               </div>

                <div class="card__footer">
                    <a href="{{ route('view.profile', $employee->user_id) }}" class="button is-full is-primary is-outline">Visit Profile</a>
                </div>

           </div>
        </div>
        @endforeach 
        
    </div>
    
</div>
    

@endsection