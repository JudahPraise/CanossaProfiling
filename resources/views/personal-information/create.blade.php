@extends('user-pds.main-pds')

@section('portfolio')
<div class="row d-flex flex-column w-100 ml-1">
  <h3 class="mb-3">Personal Information</h3>
  <form class="needs-validation" novalidate action="{{ route('personal.store') }}" method="POST"> 
    @csrf
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">First name</label>
        <input type="text" class="form-control" id="validationCustom01" name="first_name" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Middle name</label>
        <input type="text" class="form-control" id="validationCustom01" name="middle_name" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom02">Last name</label>
        <input type="text" class="form-control" id="validationCustom02" name="surname" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
    </div>

    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="validationCustom03">Date of Birth</label>
        <input type="date" class="form-control" id="validationCustom03" name="date_of_birth" required>
        <div class="invalid-feedback">
          Please provide a valid city.
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom04">Sex</label>
        <select class="custom-select" id="validationCustom04" name="sex" required>
          <option selected disabled value="">Choose...</option>
          <option>Male</option>
          <option>Female</option>
        </select>
        <div class="invalid-feedback">
          Please select a valid state.
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom04">Citizenship</label>
        <input type="text" class="form-control" name="citizenship" for="validationCustom04" required>
        <div class="invalid-feedback">
          Please select a valid state.
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom04">Civil Status</label>
        <select class="custom-select" id="validationCustom04" name="civil_status" required>
          <option selected disabled value="">Choose...</option>
          <option>Single</option>
          <option>Married</option>
          <option>Annulled</option>
          <option>Widowed</option>
          <option>Separated</option>
        </select>
        <div class="invalid-feedback">
          Please select a valid state.
        </div>
      </div>
    </div>

    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Height</label>
        <input type="text" class="form-control" id="validationCustom01" name="height" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Weight</label>
        <input type="text" class="form-control" id="validationCustom01" name="weight" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom02">Blood Type</label>
        <select id="validationCustom02" name="blood_type" class="form-control" required>
          <option selected disabled value="">Choose...</option>
          <option>A</option>
          <option>B</option>
          <option>AB</option>
          <option>O</option>
        </select>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
    </div>

    <div class="form-row">
      <div class="col-md-9 mb-3">
        <label for="validationCustom01">Address</label>
        <input type="text" class="form-control" id="validationCustom01" name="address" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom01">ZipCode</label>
        <input type="text" class="form-control" id="validationCustom01" name="zip_code" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
    </div>

    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Telephone Number</label>
        <input type="text" class="form-control" id="validationCustom01" name="tel_number" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Cellphone Number</label>
        <input type="text" class="form-control" id="validationCustom01" name="cell_number" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Email Address</label>
        <input type="email" class="form-control" id="validationCustom01" name="email_address" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
    </div>
    
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">PRC ID No.</label>
        <input type="text" class="form-control" id="validationCustom01" name="prc" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">GSIS ID No.</label>
        <input type="text" class="form-control" id="validationCustom01" name="gsis" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">PAG-IBIG ID No.</label>
        <input type="text" class="form-control" id="validationCustom01" name="pag_ibig" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
    </div>

    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">PHILHEALTH ID No.</label>
        <input type="text" class="form-control" id="validationCustom01" name="phil_health" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">SSS</label>
        <input type="text" class="form-control" id="validationCustom01" name="sss" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Driver's License</label>
        <input type="text" class="form-control" id="validationCustom01" name="driver_license" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
    </div>
   
    <button class="btn btn-primary" type="submit" value="Submit Form">Submit form</button>
  </form>
</div>

<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>
@endsection