@extends('filter-search.index')

@section('page_level_css')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection

@section('filter-search')

<div class="row w-100 px-2 d-flex align-items-center justify-content-start">

    <h4><i class="fas fa-users ml-2"></i>Employees</h4>
<div class="table-responsive">
    <table class="table display-1 dt-responsive" style="width:100%" id="personal">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Age</th>
            <th scope="col">Sex</th>
            <th scope="col">Citizenship</th>
            <th scope="col">Civil Status</th>
            <th scope="col">Blood Type</th>
          </tr>
        </thead>

        <tbody>
          @forelse($employees as $employee)
            <tr>
              <td>{{ $employee->getFullName() }}</td>
              <td>{{ \Carbon\Carbon::parse($employee->date_of_birth)->format('M d,Y') }}</td>
              <td>{{ $employee->getAgeAttribute() }}</td>
              <td>{{ $employee->sex }}</td>
              <td>{{ $employee->citizenship }}</td>
              <td>{{ $employee->civil_status }}</td>
              <td>{{ $employee->blood_type }}</td>
            </tr>
          @empty
              <tr><td>No Data</td></tr>
          @endforelse
        </tbody>

    </table>
</div>

</div>



@endsection

@section('page_level_scripts')
    <script src="{{ asset('vendor/datatables/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/personal.js') }}"></script>
@endsection