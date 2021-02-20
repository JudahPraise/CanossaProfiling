@extends('admin.dashboard')

@section('table-section')
<h4><i class="fas fa-clipboard-check ml-2"></i>Maintenance</h4>
<div class="table-responsive">
    <table class="table table-striped table-bordered dt-responsive wrap" style="width:100%" id="table_id">
        <thead>
          <tr>
            <th scope="col">Employee ID</th>
            <th scope="col">Name</th>
            <th scope="col">Department</th>
            <th scope="col">Position</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        <tbody>
          @forelse($maintenance as $maintain)
            <tr>
              <td>{{  $maintain->employee_id }}</td>
              <td>{{ $maintain->firstname." ".$maintain->middlename." ".$maintain->lastname }}</td>
              <td>{{ $maintain->department }}</td>
              <td>{{ $maintain->position }}</td>
              <td>
                  <a href="{{ route('view.profile', $maintain->id) }}" class="btn text-white" style="background-color: #1265B8">View Profile</a>
              </td>
            </tr>
          @empty
              <tr><td>No Data</td></tr>
          @endforelse
        </tbody>
    </table>
</div>
@endsection 