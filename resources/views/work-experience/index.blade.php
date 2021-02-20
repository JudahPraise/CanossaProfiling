@extends('user-pds.main-pds')

@section('portfolio')

<div class="row d-flex w-100 ml-1 mt-5">

  <div class="row d-flex w-100 mt-5 align-items-center justify-content-between mb-3">

    <div class="col d-flex align-items-center">

      <h3>Work Experience</h3>

    </div>
      
    <a href="{{ route('work.create') }}" class="btn btn-ml btn-success text-white mr-2">Add</a>


  </div>

    <table class="table table-bordered">
      
      <thead>
          <tr>
            <th colspan="2" scope="col">Period of Attendance</th>
            <th scope="col">Work Description</th>
            <th scope="col">Work Place</th>
            <th scope="col">Action</th>
          </tr>
      </thead>

      <tbody>

          @forelse($users->experiences as $experience)
            <tr>
            <td>{{ $experience->date_from }}</td>
            <td>{{ $experience->date_to }}</td>
            <td>{{ $experience->work_description }}</td>
            <td>{{ $experience->work_place }}</td>
            <td class="d-flex align-items-center">
                <button class="btn btn-sm btn-primary mr-2"><a href="{{ route('work.edit', $experience->id) }}">Edit</a></button>
                <form action="{{ route('work.delete', $experience->id) }}" method="POST">
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