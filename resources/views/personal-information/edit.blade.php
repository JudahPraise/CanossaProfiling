@extends('user-pds.main-pds')

@section('portfolio')
<div class="row d-flex w-100 ml-1">

  <h3 class="ml-2 mb-3">Personal Information</h3>

  <form class="container-fluid" action="{{ route('personal.update', $personal->id ) }}" method="POST"> 
    @csrf
    @method('PUT')
    
    <div class="row d-flex w-100">
    <div class="col-md-12">
   
      <div class="form-group">
        <label for="exampleInputEmail1">SURNAME</label>
        <input type="text" class="form-control" name="surname" value="{{ $personal->surname }}" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">FIRST NAME</label>
        <input type="text" class="form-control" name="first_name" value="{{ $personal->first_name }}" id="exampleInputPassword1">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">MIDDLE NAME</label>
        <input type="text" class="form-control" name="middle_name" value="{{ $personal->middle_name }}" id="exampleInputPassword1">
      </div>
    </div>
    </div>   
  
    <div class="row d-flex w-100">
    <div class="col-md-6">
      <div class="form-group">
            <label for="exampleInputEmail1">DATE OF BIRTH</label>
            <input type="date" class="form-control" name="date_of_birth" value="{{ $personal->date_of_birth }}"  id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
            <label for="inputState">SEX</label>
            <select id="inputState" name="sex" class="form-control">
              <option value="{{ $personal->sex }}" @if(old('type', $personal->sex) === 'Swiss System') 'selected' @endif>{{ $personal->sex }}</option>
              <option>Male</option>
              <option>Female</option>
            </select>
      </div>
      <div class="form-group">
            <label for="exampleInputEmail1">CIVIL STATUS</label><br>
            <select id="inputState" name="civil_status" class="form-control">
              <option value="{{ $personal->civil_status }}" @if(old('type', $personal->civil_status) === 'Swiss System') 'selected' @endif>{{ $personal->civil_status }}</option>
              <option>Single</option>
              <option>Married</option>
              <option>Annulled</option>
              <option>Widowed</option>
              <option>Separated</option>
            </select>
      </div>
      <div class="form-group">
            <label for="exampleInputEmail1">CITIZENSHIP</label>
            <input type="text" class="form-control" value="{{ $personal->citizenship }}" name="citizenship" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
            <label for="exampleInputEmail1">HEIGHT(m)</label>
            <input type="text" class="form-control" value="{{ $personal->height }}" name="height" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
            <label for="exampleInputEmail1">WEIGHT(kg)</label>
            <input type="text" class="form-control" value="{{ $personal->weight }}" name="weight" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">BLOOD TYPE</label><br>
        <select id="inputState" name="blood_type" class="form-control">
          <option value="{{ $personal->blood_type }}" @if(old('type', $personal->blood_type) === 'Swiss System') 'selected' @endif >{{ $personal->blood_type }}</option>
          <option>A</option>
          <option>B</option>
          <option>AB</option>
          <option>O</option>
        </select>
      </div>
    </div>
  
    <div class="col-md-6">
      
      <div class="form-group">
          <label for="exampleFormControlTextarea1">RESIDENTIAL ADDRESS</label>
          <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="4" placeholder="1234 Main St">{{ $personal->address }}</textarea>
      </div>
  
      <div class="form-group" style="margin-top: 30px">
          <label for="exampleInputEmail1">ZIP CODE</label>
          <input type="text" class="form-control" name="zip_code" value="{{ $personal->zip_code }}" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
  
      <div class="form-group">
          <label for="exampleInputEmail1">TELEPHONE NO.</label>
          <input type="text" class="form-control" name="tel_number" value="{{ $personal->tel_number }}"  id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
  
      <div class="form-group">
          <label for="exampleInputEmail1">EMAIL ADDRESS(if any)</label>
          <input type="email" class="form-control" name="email_address" value="{{ $personal->email_address }}" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
  
      <div class="form-group">
        <label for="exampleInputEmail1">CELLPHONE NO. (if any)</label>
        <input type="text" class="form-control" name="cell_number" value="{{ $personal->cell_number }}" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      <div class="form-group p-4 d-flex justify-content-end">
        
        <button type="submit" value="Submit Form" class="btn btn-primary ml-3">Update</button>
        
      </div>
      
    </div>
    
  </form>
</div>
@endsection