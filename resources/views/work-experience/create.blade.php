@extends('user-pds.main-pds')

@section('portfolio')

<div class="row d-flex w-100 ml-1">

    <h3 class="ml-2 mb-3">Work Experience</h3>

    <form class="container-fluid" action="{{ route('work.submit') }}" method="POST">
      @csrf 

        <label class="text-muted" for="periodOfAttendance">Period of Attendance</label>
        <div class="form-group form-row" id="periodOfAttendance">
          <div class="col">
            <label class="text-muted" for="dateFrom">From</label>
            <input type="date" class="form-control" name="date_from" id="dateFrom" aria-describedby="emailHelp">
          </div>
          <div class="col">
            <label class="text-muted" for="dateTo">To</label>
            <input type="date" class="form-control" name="date_to" id="dateTo" aria-describedby="emailHelp">
          </div>
          
        </div>

        <div class="form-group form-row">
          <label class="text-muted" for="workDescription">Work Description</label>
          <input type="text" class="form-control" name="work_description" id="workDescription">
        </div>

        <div class="form-group form-row">
            <label class="text-muted" for="exampleInputPassword1">Work Place</label>
            <input type="text" class="form-control" name="work_place" id="workPlace">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection