@extends('user-pds.main-pds')

@section('portfolio')

<div class="row d-flex w-100 ml-1">

  <div class="row d-flex w-100 align-items-center justify-content-between mb-2">
  
    <div class="col d-flex align-items-center ml-0">
      <h3>Educational Background</h3>
    </div>
  
  </div>

</div>

@if(Session::has('success'))
<div class="alert alert-success w-100" role="alert">
  <strong>{{ Session::get('success') }}</strong>
</div>

{{-- @elseif(Session::has('deleted'))
<div class="alert alert-warning w-100" role="alert">
  <strong>{{ Session::get('success') }}</strong>
</div> --}}
@endIf
{{-- Elementary --}}
<div class="card w-100 mb-5 shadow bg-white rounded">
  
  <div class="card-header d-flex align-items-center justify-content-between">
    @if(!empty($elementary))
    <h5 class="text-muted">Elementary</h5>
    @else
    <h5 class="text-muted">Elementary</h5>
    <a href="{{ route('elementary.create') }}" class="btn btn-sm btn-success text-white">Add</a>
    @endif
  </div>
  
  <div class="card-body">
    @if(!empty($elementary))

      <h5 class="card-text text-primary">School:</h5>
      <h5 class="text-muted mb-3"><i class="fas fa-school mr-2"></i>{{ $elementary['name_of_school'] }}</h5>
        @if(!empty($elementary->graduated_date_from and $elementary->graduated_date_to))
          <h5 class="card-title text-primary">Year Graduated:</h5>
          <h5 class="card-text text-muted mb-3"><i class="fas fa-graduation-cap mr-2"></i>{{ \Carbon\Carbon::parse($elementary['graduated_date_from'])->format('Y').' '.'-'.' '.\Carbon\Carbon::parse($elementary['graduated_date_to'])->format('Y')}}</h5>
        @else
          <h5 class="card-title text-primary">Highest Level:</h5>
          <h5 class="card-text text-muted mb-3"><i class="fas fa-pause-circle mr-3"></i>{{ $elementary['level_units_earned']}}</h5>
        @endif
    
        @if(!empty($elementary->academic_reward))
          <h5 class="card-title text-primary">Academic Reward:</h5>
          <h5 class="card-text text-muted mb-3"><i class="fas fa-graduation-cap mr-2"></i>{{ $elementary['academic_reward']}}</h5>
        @endif

      <div class="row d-flex align-items-center ml-1">
        <a href="{{ route('elementary.edit') }}" class="btn btn-primary text-white mr-2">Edit</a>
        <form action="{{ route('elementary.delete', $elementary) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type='submit' class="btn btn-danger">Delete</button>
        </form>

      </div>

    @else
    <h5 class="card-title text-muted text-center">No Data</h5>
    @endif
  </div>
</div>

@if(!empty($elementary->graduated_date_to))
  {{-- Secondary --}}
  <div class="card w-100 mb-5 shadow bg-white rounded">
    <div class="card-header d-flex align-items-center justify-content-between">
      @if(!empty($secondary))
      <h5 class="text-muted">Secondary</h5>
      @else
      <h5 class="text-muted">Secondary</h5>
      <a href="{{ route('secondary.create') }}" class="btn btn-sm btn-success text-white">Add</a>
      @endif
    </div>
    <div class="card-body">
      @if(!empty($secondary))
        <h5 class="card-text text-primary">School:</h5>
        <h5 class="text-muted mb-3"><i class="fas fa-school mr-2"></i>{{ $secondary['name_of_school'] }}</h5>
          @if(!empty($secondary->graduated_date_from and $secondary->graduated_date_to))
            <h5 class="card-title text-primary">Year Graduated:</h5>
            <h5 class="card-text text-muted mb-3"><i class="fas fa-graduation-cap mr-2"></i>{{ \Carbon\Carbon::parse($secondary['graduated_date_from'])->format('Y').' '.'-'.' '.\Carbon\Carbon::parse($secondary['graduated_date_to'])->format('Y')}}</h5>
          @else
            <h5 class="card-title text-primary">Highest Level:</h5>
            <h5 class="card-text text-muted mb-3"><i class="fas fa-pause-circle mr-3"></i>{{ $secondary['level_units_earned']}}</h5>
          @endif
          @if(!empty($secondary->academic_reward))
            <h5 class="card-title text-primary">Academic Reward:</h5>
            <h5 class="card-text text-muted mb-3"><i class="fas fa-graduation-cap mr-2"></i>{{ $secondary['academic_reward']}}</h5>
          @endif
        <div class="row d-flex align-items-center ml-1">
          <a href="{{ route('secondary.edit') }}" class="btn btn-primary text-white mr-2">Edit</a>
          <form action="{{ route('secondary.delete', $secondary) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type='submit' class="btn btn-danger">Delete</button>
          </form>
        </div>
      @else
      <h5 class="card-title text-muted text-center">No Data</h5>
      @endif
    </div>
  </div>
  @endIf

@if(!empty($secondary->graduated_date_to))
{{-- College --}}
  <div class="card w-100 mb-5 shadow bg-white rounded">
    <div class="card-header d-flex align-items-center justify-content-between">
      @if(!empty($college))
      <h5 class="text-muted">College</h5>
      @else
      <h5 class="text-muted">College</h5>
      <a href="{{ route('college.create') }}" class="btn btn-sm btn-success text-white">Add</a>
      @endif
    </div>
    <div class="card-body">
      @if(!empty($college))
        <h5 class="card-text text-primary">School:</h5>
        <h5 class="text-muted mb-3"><i class="fas fa-school mr-2"></i>{{ $college['name_of_school'] }}</h5>
        <h5 class="card-title text-primary">Course/Degree:</h5>
        <h5 class="card-text text-muted mb-3"><i class="fas fa-user-tie mr-2"></i>{{ $college['course_degree']}}</h5>
          @if(!empty($college->graduated_date_from and $college->graduated_date_to))
            <h5 class="card-title text-primary">Year Graduated:</h5>
            <h5 class="card-text text-muted mb-3"><i class="fas fa-graduation-cap mr-2"></i>{{ \Carbon\Carbon::parse($college['graduated_date_from'])->format('Y').' '.'-'.' '.\Carbon\Carbon::parse($college['graduated_date_to'])->format('Y')}}</h5>
          @else
            <h5 class="card-title text-primary">Highest Level:</h5>
            <h5 class="card-text text-muted mb-3"><i class="fas fa-pause-circle mr-3"></i>{{ $college['level_units_earned']}}</h5>
          @endif  
          @if(!empty($college->academic_reward))
            <h5 class="card-title text-primary">Academic Reward:</h5>
            <h5 class="card-text text-muted mb-3"><i class="fas fa-graduation-cap mr-2"></i>{{ $college['academic_reward']}}</h5>
          @endif
        <div class="row d-flex align-items-center ml-1">
          <a href="{{ route('college.edit') }}" class="btn btn-primary text-white mr-2">Edit</a>
          <form action="{{ route('college.delete', $college) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type='submit' class="btn btn-danger">Delete</button>
          </form>
        </div>
      @else
      <h5 class="card-title text-muted text-center">No Data</h5>
      @endif
    </div>
  </div>
@endIf

@if(!empty($college->graduated_date_to))
  {{-- Graduate Study --}}
  <div class="card w-100 mb-5 shadow bg-white rounded">
    <div class="card-header d-flex align-items-center justify-content-between">
      <h5 class="text-muted">Graduate Studies</h5>
      <a href="{{ route('graduate_study.create') }}" class="btn btn-sm btn-success text-white">Add</a>
    </div>
    <div class="card-body">    
      @forelse($graduate_studies as $graduate_study)
      <div class="container">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-primary">Degree:</h5>
            <h5 class="card-text text-muted mb-3"><i class="fas fa-user-tie mr-2"></i>{{ $graduate_study['degree']}}</h5>
          </div>
        </div>
        <div class="row d-flex align-items-start">
          <div class="col-sm">
            <h5 class="card-text text-primary">School:</h5>
            <h5 class="text-muted mb-3"><i class="fas fa-school mr-2"></i>{{ $graduate_study['name_of_school'] }}</h5>
          </div>
          <div class="col-sm">
            <h5 class="card-title text-primary">Course:</h5>
            <h5 class="card-text text-muted mb-3"><i class="fas fa-user-tie mr-2"></i>{{ $graduate_study['course']}}</h5>
          </div>
        </div>
        <div class="row d-flex align-items-start">
          <div class="col-sm">
            @if(!empty($graduate_study->graduated_date_from and $graduate_study->graduated_date_to))
              <h5 class="card-title text-primary">Year Graduated:</h5>
              <h5 class="card-text text-muted mb-3"><i class="fas fa-graduation-cap mr-2"></i>{{ \Carbon\Carbon::parse($graduate_study['graduated_date_from'])->format('Y').' '.'-'.' '.\Carbon\Carbon::parse($graduate_study['graduated_date_to'])->format('Y')}}</h5>
            @else
              <h5 class="card-title text-primary">Highest Level:</h5>
              <h5 class="card-text text-muted mb-3"><i class="fas fa-pause-circle mr-3"></i>{{ $graduate_study['level_units_earned']}}</h5>
            @endif  
          </div>
          <div class="col-sm">
            @if(!empty($graduate_study->academic_reward))
              <h5 class="card-title text-primary">Academic Reward:</h5>
              <h5 class="card-text text-muted mb-3"><i class="fas fa-graduation-cap mr-2"></i>{{ $graduate_study['academic_reward']}}</h5>
            @endif
          </div>
        </div>
        <div class="row d-flex align-items-center ml-1">
          <a href="{{ route('graduate_study.edit', $graduate_study->id) }}" class="btn btn-primary text-white mr-2">Edit</a>
          <form action="{{ route('graduate_study.delete', $graduate_study->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type='submit' class="btn btn-danger">Delete</button>
          </form>
        </div>
      </div>
      <hr/>
      @empty
      <h5 class="card-title text-muted text-center">No Data</h5>
      @endforelse
    </div>
  </div>
@endIf

<script>
  $('.alert').alert('close');
</script>

@endsection