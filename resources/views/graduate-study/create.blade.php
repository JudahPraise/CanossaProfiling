@extends('user-pds.main-pds')

@section('portfolio')


<div class="row d-flex w-100 ml-1">
    
  <div class="col d-flex align-items-center ml-0">

    <a href="{{ url()->previous() }}"><i class="fas fa-arrow-left mr-2" style="font-size: 1.5rem;"></i></a>
    <h3>Graduate Studies</h3>

  </div>

  <form class="container-fluid" action="{{ route('graduate_study.submit') }}" method="POST">
    @csrf 

    {{-- name of school --}}
    <div class="form-group">
      <label for="spouseSurname">Name of School (Write in full)</label>
      <input type="text" class="form-control" name="name_of_school" id="spouseSurname" aria-describedby="emailHelp">
    </div>

    {{-- period of attenance --}}
    
    {{-- <div class="form-group d-flex flex-column justify-content-center" >

      <label for="period">Period of Attendance</label>

      <div class="row" id="period">
        <div class="col-md-6">
          <div class="form-group">
              <label for="childBirthDate">From</label>
              <input type="date" class="form-control" name="period_date_from" id="childBirthDate0" aria-describedby="emailHelp">
          </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="childBirthDate">To</label>
                <input type="date" class="form-control" name="period_date_to" id="childBirthDate0" aria-describedby="emailHelp">
            </div>
        </div>
      </div>
      
    </div> --}}

    

    <div class="form-group">

      <label for="spouseSurname">Degree</label>
      <select class="custom-select" name="degree">
        <option selected>Open this select menu</option>
        <option value="Master's">Master's</option>
        <option value="Doctorate">Doctorate</option>
        <option value="3">Three</option>
      </select>

    </div>

    {{-- Course or degree --}}
    <div class="form-group">

      <label for="spouseSurname">Course</label>
      <input type="text" class="form-control" name="course" id="spouseSurname" aria-describedby="emailHelp">

    </div>

    {{-- highest level if not graduated --}}
    <div class="form-group">

        <label for="spouseSurname">Highest level/units earned (If not graduated)</label>
        <input type="text" class="form-control" name="level_units_earned" id="spouseSurname" aria-describedby="emailHelp">

    </div>

    {{-- year graduated --}}
    <div class="form-group d-flex flex-column justify-content-center" >

      <label for="period">School Year Graduated</label>

      <div class="row" id="period">
        <div class="col-md-6">
          <div class="form-group">
              <label for="childBirthDate">From</label>
              <input type="date" class="form-control" name="graduated_date_from" id="childBirthDate0" aria-describedby="emailHelp">
          </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="childBirthDate">To</label>
                <input type="date" class="form-control" name="graduated_date_to" id="childBirthDate0" aria-describedby="emailHelp">
            </div>
        </div>
      </div>
      
    </div>

    {{-- academic recieved --}}
    <div class="form-group">

        <label for="spouseSurname">SCHOLARSHIP/ACADEMIC HONORS RECIEVED</label>
        <input type="text" class="form-control" name="academic_reward" id="spouseSurname" aria-describedby="emailHelp">

    </div>
    
    <button type="submit" class="btn btn-primary" value="Submit Form" >Submit</button>

  </form>

</div>

@endsection