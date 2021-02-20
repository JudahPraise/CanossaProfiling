@extends('user-pds.main-pds')

@section('portfolio')


<div class="row d-flex w-100 ml-1">
    
  <div class="col d-flex align-items-center ml-0">

    <a href="{{ url()->previous() }}"><i class="fas fa-arrow-left mr-2" style="font-size: 1.5rem;"></i></a>
    <h3>College</h3>

  </div>

    <form class="container-fluid" action="{{ route('graduate_study.update', $graduate_study->id) }}" method="POST">
      @csrf 
      @method('PUT')

      <div class="form-group">
        <label for="spouseSurname">Name of School (Write in full)</label>
        <input type="text" class="form-control" name="name_of_school" value="{{ $graduate_study->name_of_school }}" id="spouseSurname" aria-describedby="emailHelp">
      </div>
  
      <div class="form-group">
  
        <label for="spouseSurname">Degree</label>
        <select class="custom-select" name="degree">
          <option selected>{{ $graduate_study->degree }}</option>
          <option value="Master's">Master's</option>
          <option value="Doctorate">Doctorate</option>
          <option value="3">Three</option>
        </select>
  
      </div>

      <div class="form-group">
  
        <label for="spouseSurname">Course</label>
        <input type="text" class="form-control" name="course" value="{{ $graduate_study->course }}" id="spouseSurname" aria-describedby="emailHelp">
  
      </div>
  
      <div class="form-group">
  
          <label for="spouseSurname">Highest level/units earned (If not graduated)</label>
          <input type="text" class="form-control" name="level_units_earned" value="{{ $graduate_study->level_units_earned }}" id="spouseSurname" aria-describedby="emailHelp">
  
      </div>
  
      <div class="form-group d-flex flex-column justify-content-center" >
  
        <label for="period">School Year Graduated</label>
  
        <div class="row" id="period">
          <div class="col-md-6">
            <div class="form-group">
                <label for="childBirthDate">From</label>
                <input type="date" class="form-control" name="graduated_date_from" value="{{ $graduate_study->graduated_date_from }}" id="childBirthDate0" aria-describedby="emailHelp">
            </div>
          </div>
  
          <div class="col-md-6">
              <div class="form-group">
                  <label for="childBirthDate">To</label>
                  <input type="date" class="form-control" name="graduated_date_to" value="{{ $graduate_study->graduated_date_to }}" id="childBirthDate0" aria-describedby="emailHelp">
              </div>
          </div>
        </div>
        
      </div>
  
      <div class="form-group">
  
          <label for="spouseSurname">SCHOLARSHIP/ACADEMIC HONORS RECIEVED</label>
          <input type="text" class="form-control" name="academic_reward" value="{{ $graduate_study->academic_reward }}" id="spouseSurname" aria-describedby="emailHelp">
  
      </div>
        <button type="submit" class="btn btn-primary" value="Submit Form" >Submit</button>

    </form>

</div>

@endsection