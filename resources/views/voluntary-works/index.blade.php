@extends('user-pds.main-pds')

@section('portfolio')

{{-- @component('components.navigator')

@endcomponent --}}

<div class="row d-flex w-100 ml-1 mt-5">

  <div class="row d-flex w-100 mt-5 align-items-center justify-content-between mb-3">

    <div class="col d-flex align-items-center">

      <h3>Voluntary Works</h3>

    </div>
      
    <a href="{{ route('voluntary.create') }}" class="btn btn-ml btn-success text-white mr-2">Add</a>


  </div>

    <table class="table table-bordered">
      
      <thead style="text-align: center">
          <tr>
            <th scope="col">Name & Address of Organization</th>
            <th colspan="2" scope="col">Period of Attendance<br><span class="mr-5">FROM</span> <span class="ml-2">TO</span></th>
            <th scope="col">Number of Hours</th>
            <th scope="col">Position/Nature of Work</th>
            <th scope="col">Action</th>
          </tr>
      </thead>

      <tbody>

          @forelse($users->voluntary_works as $voluntary)
            <tr>
            <td>{{ $voluntary->name_address }}</td>
            <td>{{ $voluntary->date_from }}</td>
            <td>{{ $voluntary->date_to }}</td>
            <td>{{ $voluntary->no_hours }}</td>
            <td>{{ $voluntary->position }}</td>
            <td class="d-flex align-items-center">
                <button class="btn btn-sm btn-primary mr-2"><a href="{{ route('voluntary.edit', $voluntary->id) }}">Edit</a></button>
                <form action="{{ route('voluntary.delete', $voluntary->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type='submit' class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
            </tr>
            
          @empty

            <tr>
              <td class="text-muted" colspan="6" style="text-align: center;" >No Experience Available</td>
            </tr>

          @endforelse
        
  
      </tbody>

    </table>
</div>
@endsection