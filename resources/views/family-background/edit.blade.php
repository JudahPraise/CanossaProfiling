@extends('user-pds.main-pds')

@section('portfolio')
<div class="row d-flex align-items-center w-100 mb-3 ml-3">
    <h2>Family Background</h2>
</div>
<form class="w-100" method="POST" action="{{ route('family.update', $family_background->id) }}"> 
  @csrf 
  @method('put')
  <div class="row d-flex w-100 ml-1">
    <div class="col-md-12">
        <h3>Spouse</h3>

      <div class="form-group">
        <label for="spouseSurname">SURNAME</label>
        <input type="text" class="form-control" name="spouse_surname" value="{{  $family_background->spouse_surname }}" id="spouseSurname">
      </div>
      <div class="form-group">
        <label for="spouseFirstName">FIRST NAME</label>
        <input type="text" class="form-control" name="spouse_firstname" value="{{  $family_background->spouse_firstname }}" id="spouseFirstName">
      </div>
      <div class="form-group">
        <label for="spouseMiddleName">MIDDLE NAME</label>
        <input type="text" class="form-control" name="spouse_middlename" value="{{  $family_background->spouse_middlename }}" id="spouseMiddleName">
      </div>
      <div class="form-group">
          <label for="spouseOccupation">OCCUPATION</label>
          <input type="text" class="form-control" name="spouse_occupation" value="{{  $family_background->spouse_occupation }}" id="spouseOccupation">
      </div>
      <div class="form-group">
          <label for="spouseEmployerName">EMPLOYER/BUSINESS NAME</label>
          <input type="text" class="form-control" name="spouse_employer_business_name" value="{{  $family_background->spouse_employer_business_name }}" id="spouseEmployerName">
      </div>
      <div class="form-group">
          <label for="spouseBusinessAddress">BUSINESS ADDRESS</label>
          <textarea class="form-control" name="spouse_business_address" id="spouseBusinessAddress" rows="2" placeholder="1234 Main St">{{  $family_background->spouse_business_address }}</textarea>
      </div>
      <div class="form-group">
          <label for="spouseTelNo">TELEPHONE NO.</label>
          <input type="text" class="form-control" name="spouse_tel_no" value="{{  $family_background->spouse_tel_no }}" id="spouseTelNo">
      </div>
    </div>
</div>
  
  <div class="row d-flex w-100 ml-1">
    <div class="col-md-6">
      <h3>FATHER</h3>
      <div class="form-group">
          <label for="fatherSurname">SURNAME</label>
          <input type="text" class="form-control" name="father_surname" value="{{  $family_background->father_surname }}" id="fatherSurname" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="fatherFirstName">FIRST NAME</label>
          <input type="text" class="form-control" name="father_firstname" value="{{  $family_background->father_firstname }}" id="fatherFirstName">
        </div>
        <div class="form-group">
          <label for="fatherMiddleName">MIDDLE NAME</label>
          <input type="text" class="form-control" name="father_middlename" value="{{  $family_background->father_middlename }}" id="fatherMiddleName">
        </div>
        <div class="form-group">
            <label for="fatherOccupation">OCCUPATION</label>
            <input type="text" class="form-control" name="father_occupation" value="{{  $family_background->father_occupation }}" id="fatherOccupation">
        </div>
        <div class="form-group">
            <label for="fatherEmployerName">EMPLOYER/BUSINESS NAME</label>
            <input type="text" class="form-control" name="father_employer_business_name" value="{{  $family_background->father_employer_business_name }}" id="fatherEmployerName">
        </div>
        <div class="form-group">
            <label for="fatherBusinessAddress">BUSINESS ADDRESS</label>
            <textarea class="form-control" name="father_business_address"  id="fatherBusinessAddress" rows="2" placeholder="1234 Main St">{{  $family_background->father_business_address }}</textarea>
        </div>
        <div class="form-group">
          <label for="fatherTelNo">TELEPHONE NO.</label>
          <input type="text" class="form-control" name="father_tel_no" value="{{  $family_background->father_tel_no }}" id="fatherTelNo">
      </div>
    </div>
    <div class="col-md-6">
      <h3>MOTHER</h3>
        <div class="form-group">
          <label for="motherSurname">SURNAME</label>
          <input type="text" class="form-control" name="mother_surname" value="{{  $family_background->mother_surname }}" id="motherSurname" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="motherFirstName">FIRST NAME</label>
          <input type="text" class="form-control" name="mother_firstname" value="{{  $family_background->mother_firstname }}" id="motherFirstName">
        </div>
        <div class="form-group">
          <label for="motherMiddleName">MIDDLE NAME</label>
          <input type="text" class="form-control" name="mother_middlename" value="{{  $family_background->mother_middlename }}" id="motherMiddleName">
        </div>
        <div class="form-group">
            <label for="motherOccupation">OCCUPATION</label>
            <input type="text" class="form-control" name="mother_occupation" value="{{  $family_background->mother_occupation }}" id="motherOccupation">
        </div>
        <div class="form-group">
            <label for="motherEmployerName">EMPLOYER/BUSINESS NAME</label>
            <input type="text" class="form-control" name="mother_employer_business_name" value="{{  $family_background->mother_employer_business_name }}" id="motherEmployerName">
        </div>
        <div class="form-group">
            <label for="motherBusinessAddress">BUSINESS ADDRESS</label>
            <textarea class="form-control" name="mother_business_address" id="motherBusinessAddress" rows="2" placeholder="1234 Main St">{{  $family_background->mother_business_address }}</textarea>
        </div>
        <div class="form-group">
          <label for="motherTelNo">TELEPHONE NO.</label>
          <input type="text" class="form-control" name="mother_tel_no" value="{{  $family_background->mother_tel_no }}" id="momotherTelNother_tel_no">
      </div>
    </div>

</div>

<div class="row d-flex justify-content-end w-100 mr-1">
  <button type="submit" class="btn btn-primary ml-3">Submit</button>
</div>
  
</form>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  
  $(document).ready(function(){

    $(this).on("click", ".addMore", function(){
      var html = '<div class="form-group d-flex"><div class="col-6"><label for="motherSurname">NAME</label><input type="text" class="form-control" name="name[]" id="motherSurname" aria-describedby="emailHelp"></div><div class="col-6 d-flex ml-3 align-items-center"><div class="row w-75"><label for="motherFirstName">DATE OF BIRTH</label><input type="date" class="form-control" name="date_of_birth" id="motherFirstName"></div></div>'
      html += '<a class="btn btn-danger remove mt-4 text-white align-self-center" style="text-decoration: none; position: absolute; right: 19.5rem;">Remove</a></div>'

      $('.inputs_div').append(html);
    });

    $(this).on("click", ".remove", function(){
      var target_input = $(this).parent();
        target_input.remove();
    });

  });

</script> --}}
@endsection