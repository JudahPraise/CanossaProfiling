@extends('user-pds.main-pds')

@section('portfolio')

<div class="row d-flex w-100 ml-1">

    <h3 class="ml-2 mb-3">Voluntary Works</h3>

    <form class="container-fluid" action="{{ route('voluntary.update', $voluntary->id) }}" method="POST">
      @csrf 
      @method('put')

        <div class="form-group form-row">
          <label class="text-muted" for="name_address">Name & Address of Organization</label>
          <input type="text" class="form-control" name="name_address" id="name_address" value="{{ $voluntary->name_address }}">
        </div>

        <label class="text-muted" for="periodOfAttendance">Period of Attendance</label>
        <div class="form-group form-row" id="periodOfAttendance">
          <div class="col">
            <label class="text-muted" for="dateFrom">From</label>
            <input type="date" class="form-control" name="date_from" id="dateFrom" aria-describedby="emailHelp" value="{{ $voluntary->date_from }}">
          </div>
          <div class="col">
            <label class="text-muted" for="dateTo">To</label>
            <input type="date" class="form-control" name="date_to" id="dateTo" aria-describedby="emailHelp" value="{{ $voluntary->date_to }}">
          </div>
          
        </div>

        <div class="form-group form-row">
          <label class="text-muted" for="no_hours">Number of Hours</label>
          <input type="text" class="form-control" name="no_hours" id="no_hours" value="{{ $voluntary->no_hours }}">
        </div>

        <div class="form-group form-row">
            <label class="text-muted" for="position">Position/Nature of Work</label>
            <input type="text" class="form-control" name="position" id="position" value="{{ $voluntary->position }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection