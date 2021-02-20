@extends('user-pds.main-pds')

@section('portfolio')  
<div class="row d-flex align-items-center w-100 ml-1">
    <a href="{{ url()->previous() }}"><i class="fas fa-arrow-left" style="font-size: 2rem;"></i></a>
    <h2>Civil Service Eligibility</h2>
  </div>

<div class="row d-flex w-100 ml-1">
  <div class="col-md-12">
    <form>

    <div class="form-group">
        <label for="exampleInputEmail1">CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE BARANGAY ELIGIBILITY / DRIVER'S LICENSE</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
          
    <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <div class="form-group">
                  <label for="exampleInputEmail1">RATING (If Applicable)</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label for="childBirthDate">DATE OF EXAMINATION /CONFERMENT</label>
              <input type="date" class="form-control" id="childBirthDate0" aria-describedby="emailHelp">
          </div>
      </div>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">PLACE OF EXAMINATION / CONFERMENT</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <h5>LICENSE (If applicable)</h5>
    <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label for="childBirthDate">NUMBER</label>
              <input type="text" class="form-control" id="childBirthDate0" aria-describedby="emailHelp">
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label for="childBirthDate">DTE OF VALIDITY</label>
              <input type="date" class="form-control" id="childBirthDate0" aria-describedby="emailHelp">
          </div>
      </div>
    </div>
          
  </div>
</div> 
    <button type="submit" class="btn btn-primary ml-3">Submit</button>
    <button type="submit" class="btn btn-secondary ml-3">Add More</button>
</form>
@endsection