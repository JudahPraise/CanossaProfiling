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
            <th scope="col">Degree</th>
            <th scope="col">Course</th>
            <th scope="col">Units Earned</th>
            <th scope="col">Year Graduated</th>
            <th scope="col">Academic Reward</th>
          </tr>
        </thead>

        <tbody>
          
            @foreach($employees as $study)
            <tr> 
                <td>{{ $study->user->employee->getFullName() }}</td>
                <td>{{ $study->degree }}</td>
                <td>{{ $study->course }}</td>
                <td>{{ $study->level_units_earned }}</td>
                <td>{{ \Carbon\Carbon::parse($study->graduated_date_from)->format('Y')." ".\Carbon\Carbon::parse($study->graduated_date_to)->format('Y') }}</td>
                <td>{{ $study->academic_reward }}</td>
              </tr>
            
            @endforeach
            

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