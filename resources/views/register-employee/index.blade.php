@extends('admin.register_employee')

@section('page_level_css')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection

@section('register-section')

<div class="row w-100 px-2 d-flex align-items-center justify-content-start">
    <div class="table-responsive">
        <table class="table table-striped table-bordered dt-responsive wrap" style="width:100%" id="table_id">
            <thead>
              <tr>
                <th scope="col">Employee_ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Department</th>
                <th scope="col">Position</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @forelse($users as $user)
              <tr>
                <td>{{ $user->employee->employee_id }}</td>
                <td>{{ $user->getFullname() }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->employee->department }}</td>
                <td>{{ $user->employee->position }}</td>
                <td>
                  <a href="{{ route('user.edit-password', $user->id) }}" class="btn btn-primary">Change Password</a>
                  <a href="" class="btn btn-warning">Archive</a>
                </td>
              </tr>

              @empty

                emmpty

              @endforelse
              
            </tbody>
          </table>
    </div>
</div>

@endsection

@section('page_level_scripts')
    <script src="{{ asset('vendor/datatables/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/datatables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable({
                "bLengthChange": false,
            });
        } );
    </script>
@endsection