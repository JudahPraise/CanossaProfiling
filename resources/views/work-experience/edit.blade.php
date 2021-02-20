@extends('user-pds.main-pds')

@section('portfolio')

<div class="row d-flex w-100 ml-1">

    <div class="col d-flex align-items-center ml-0">

        <a href="{{ url()->previous() }}"><i class="fas fa-arrow-left mr-2" style="font-size: 1.5rem;"></i></a>
        <h3>Work Experience</h3>

      </div>

    <form class="container-fluid" action="{{ route('work.update', $experience->id) }}" method="POST">
      @csrf 
      @method('PUT')

        <label class="text-muted" for="periodOfAttendance">Period of Attendance</label>
        <div class="form-group form-row" id="periodOfAttendance">
          <div class="col">
            <label class="text-muted" for="dateFrom">From</label>
            <input type="date" class="form-control" name="date_from" id="dateFrom" aria-describedby="emailHelp" value="{{ $experience->date_from }}">
          </div>
          <div class="col">
            <label class="text-muted" for="dateTo">To</label>
            <input type="date" class="form-control" name="date_to" id="dateTo" aria-describedby="emailHelp" value="{{ $experience->date_to }}">
          </div>
          
        </div>

        <div class="form-group form-row">
          <label class="text-muted" for="workDescription">Work Description</label>
          <input type="text" class="form-control" name="work_description" id="workDescription" value="{{ $experience->work_description }}">
        </div>

        <div class="form-group form-row">
            <label class="text-muted" for="exampleInputPassword1">Work Place</label>
            <input type="text" class="form-control" name="work_place" id="workPlace" value="{{ $experience->work_place }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>

    </form>
</div>

@endsection