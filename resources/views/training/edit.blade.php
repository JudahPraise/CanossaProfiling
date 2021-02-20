@extends('user-pds.main-pds')

@section('portfolio')

<div class="row d-flex w-100 ml-1">

    <h3 class="ml-2 mb-3">Seminars and Trainings</h3>

    <form class="container-fluid" action="{{ route('training.update', $training->id) }}" method="POST" enctype="multipart/form-data">
        @csrf 
        @method('put')

        <div class="form-group form-row" id="periodOfAttendance">

          <div class="col">
            <label class="text-muted" for="dateFrom">Date</label>
            <input type="date" class="form-control" name="training_date" value="{{ $training->training_date }}" id="dateFrom" aria-describedby="emailHelp">
          </div>
          
        </div>

        <div class="form-group form-row">
          <label class="text-muted" for="workDescription">Title</label>
          <input type="text" class="form-control" name="training_title" id="workDescription" value="{{ $training->training_title }}">
        </div>

        <div class="form-group form-row">
            <label class="text-muted" for="exampleInputPassword1">Sponsor</label>
            <input type="text" class="form-control" name="training_sponsor" id="workPlace" value="{{ $training->training_sponsor }}">
        </div>

        <div class="form-group form-row">
            <label class="text-muted" for="certificate">Upload Scaned Certificate</label>
            <div class="custom-file" id="certificate">
                <input type="file" name="training_certificate" class="custom-file-input" id="customFile" value="{{ "$training->training_certificate" }}">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>

        

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection