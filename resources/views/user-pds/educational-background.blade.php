@extends('user-pds.main-pds')

@section('portfolio') 

<link rel="stylesheet" href="{{ asset('/css/datepicker.css') }}">

<div class="row d-flex align-items-center w-100 ml-1">
    <a href="{{ url()->previous() }}"><i class="fas fa-arrow-left" style="font-size: 2rem;"></i></a>
    <h2>Educational Background</h2>
</div>

<div class="row d-flex w-100 ml-1">
    <div class="col-md-12">
        <h3>Elementary</h3>

        <form action="">
            

            {{-- name of school --}}
            <div class="form-group">

                <label for="spouseSurname">NAME OF SCHOOL (Write in full)</label>
                <input type="text" class="form-control" id="spouseSurname" aria-describedby="emailHelp">

            </div>

            {{-- degree course --}}
            <div class="form-group">

                <label for="spouseSurname">BASIC EDUCATION/DEGREE/COURSE (Write in full)</label>
                <input type="text" class="form-control" id="spouseSurname" aria-describedby="emailHelp">

            </div>

            {{-- period of attenance --}}
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="childBirthDate">FROM</label>
                        <input type="date" class="form-control" id="childBirthDate0" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="childBirthDate">TO</label>
                        <input type="date" class="form-control" id="childBirthDate0" aria-describedby="emailHelp">
                    </div>
                </div>

            </div>

            {{-- highest level if not graduated --}}
            <div class="form-group">

                <label for="spouseSurname">HIGHEST LEVEL/UNITS EARNED (If not graduated)</label>
                <input type="text" class="form-control" id="spouseSurname" aria-describedby="emailHelp">

            </div>

            {{-- year graduated --}}
            <div class="form-group">

                <label for="spouseSurname">YEAR GRADUATED</label>
                <input type="date" class="form-control" id="childBirthDate0" aria-describedby="emailHelp">

            </div>

            {{-- academic recieved --}}
            <div class="form-group">

                <label for="spouseSurname">SCHOLARSHIP/ACADEMIC HONORS RECIEVED</label>
                <input type="text" class="form-control" id="spouseSurname" aria-describedby="emailHelp">

            </div>


            <h3 class="mt-5">Secondary</h3>
            <div class="form-group">

                <label for="spouseSurname">NAME OF SCHOOL (Write in full)</label>
                <input type="text" class="form-control" id="spouseSurname" aria-describedby="emailHelp">

            </div>

            <div class="form-group">

                <label for="spouseSurname">BASIC EDUCATION/DEGREE/COURSE (Write in full)</label>
                <input type="text" class="form-control" id="spouseSurname" aria-describedby="emailHelp">

            </div>

            <h5>PERIOD OF ATTENDANCE</h5>
            <div class="row">

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="childBirthDate">FROM</label>
                        <input type="date" class="form-control" id="childBirthDate0" aria-describedby="emailHelp">

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label for="childBirthDate">TO</label>
                        <input type="date" class="form-control" id="childBirthDate0" aria-describedby="emailHelp">
                        
                    </div>

                </div>

            </div>

            <div class="form-group">

                <label for="spouseSurname">HIGHEST LEVEL/UNITS EARNED (If not graduated)</label>
                <input type="text" class="form-control" id="spouseSurname" aria-describedby="emailHelp">

            </div>

            <div class="form-group">

                <label for="spouseSurname">YEAR GRADUATED</label>
                <input type="date" class="form-control" id="childBirthDate0" aria-describedby="emailHelp">

            </div>

            <div class="form-group">

                <label for="spouseSurname">SCHOLARSHIP/ACADEMIC HONORS RECIEVED</label>
                <input type="text" class="form-control" id="spouseSurname" aria-describedby="emailHelp">

            </div>


            <h3 class="mt-5">COLLEGE</h3>
            <div class="form-group">

                <label for="spouseSurname">NAME OF SCHOOL (Write in full)</label>
                <input type="text" class="form-control" id="spouseSurname" aria-describedby="emailHelp">

            </div>

            <div class="form-group">
                <label for="spouseSurname">BASIC EDUCATION/DEGREE/COURSE (Write in full)</label>
                <input type="text" class="form-control" id="spouseSurname" aria-describedby="emailHelp">
            </div>

            <h5>PERIOD OF ATTENDANCE</h5>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="childBirthDate">FROM</label>
                        <input type="date" class="form-control" id="childBirthDate0" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="childBirthDate">TO</label>
                        <input type="date" class="form-control" id="childBirthDate0" aria-describedby="emailHelp">
                    </div>
                </div>

            </div>

            <div class="form-group">
                <label for="spouseSurname">HIGHEST LEVEL/UNITS EARNED (If not graduated)</label>
                <input type="text" class="form-control" id="spouseSurname" aria-describedby="emailHelp">
            </div>

            <div class="form-group">

                <label for="spouseSurname">YEAR GRADUATED</label>
                <input type="date" class="form-control" id="childBirthDate0" aria-describedby="emailHelp">

            </div>

            <div class="form-group">

                <label for="spouseSurname">SCHOLARSHIP/ACADEMIC HONORS RECIEVED</label>
                <input type="text" class="form-control" id="spouseSurname" aria-describedby="emailHelp">

            </div>


            <h3 class="mt-5">Graduate Studies</h3>
            <div class="form-group">
                <label for="spouseSurname">NAME OF SCHOOL (Write in full)</label>
                <input type="text" class="form-control" id="spouseSurname" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="spouseSurname">BASIC EDUCATION/DEGREE/COURSE (Write in full)</label>
                <input type="text" class="form-control" id="spouseSurname" aria-describedby="emailHelp">
            </div>

            <h5>PERIOD OF ATTENDANCE</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="childBirthDate">FROM</label>
                        <input type="date" class="form-control" id="childBirthDate0" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="childBirthDate">TO</label>
                        <input type="date" class="form-control" id="childBirthDate0" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="spouseSurname">HIGHEST LEVEL/UNITS EARNED (If not graduated)</label>
                <input type="text" class="form-control" id="spouseSurname" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="spouseSurname">YEAR GRADUATED</label>
                <input type="date" class="form-control" id="childBirthDate0" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="spouseSurname">SCHOLARSHIP/ACADEMIC HONORS RECIEVED</label>
                <input type="text" class="form-control" id="spouseSurname" aria-describedby="emailHelp">
            </div>

            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>

<div class="row d-flex align-items-center w-100 ml-1 mt-5">
    <h2>Graduate Studies</h2>
</div>

<div class="table-responsive">
    <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name of School</th>
            <th scope="col">Degree</th>
            <th colspan="2" scope="col">Period of Attendance</th>
            <th scope="col">Highest Unit Earned</th>
            <th scope="col">Year Graduated</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>From</td>
            <td>To</td>
            <td>Mark</td>
            <td>Otto</td>
          </tr>

        </tbody>
    </table>
</div>

<script src="{{ asset('/js/bootstrap-datepicker.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

@endsection