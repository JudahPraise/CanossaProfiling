@extends('user-pds.main-pds')

@section('portfolio')

{{-- @component('components.navigator')

@endcomponent --}}

<div class="row d-flex w-100 ml-1 mt-5">

  <div class="row d-flex w-100 mt-5 align-items-center justify-content-between mb-3">

    <div class="col d-flex align-items-center">

      <h3>Seminars and Trainings</h3>

    </div>
      
    <a href="{{ route('training.create') }}" class="btn btn-ml btn-success text-white mr-2">Add</a>


  </div>

  <table class="table table-bordered">
    <thead>
        <tr>
          <th scope="col">Date</th>
          <th scope="col">Title</th>
          <th scope="col">Sponsor</th>
          <th scope="col">Certificate</th>
          <th scope="col">Action</th>
        </tr>
    </thead>

    <tbody>

        @forelse($user->trainings as $training)
          <tr>
            <td>{{ $training->training_date }}</td>  
            <td>{{ $training->training_title }}</td>
            <td>{{ $training->training_sponsor }}</td>
            <td>
              <a href="{{ route('training.download', $training->id) }}">{{ $training->training_certificate }}</a>
            </td>
            <td class="d-flex align-items-center">
                <button class="btn btn-sm btn-primary mr-2"><a href="{{ route('training.edit', $training->id) }}">Edit</a></button>
                <form action="{{ route('training.delete', $training->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type='submit' class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
          </tr>
          
        @empty

          <tr>
            <td class="text-muted" colspan="5" style="text-align: center;" >No Experience Available</td>
          </tr>

        @endforelse
      

    </tbody>

  </table>

</div>

@endsection