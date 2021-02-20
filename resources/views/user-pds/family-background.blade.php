@extends('user-pds.main-pds')

@section('portfolio')   

<div class="row d-flex align-items-center w-100">
  <a href="{{ url()->previous() }}"><i class="fas fa-arrow-left mr-3" style="font-size: 2rem;"></i></a>
  <h2>Family Background</h2>
</div>

  <div class="row d-flex w-100 ml-1">
    <div class="col-md-12">
        <h3>Spouse</h3>
      <form>  
      <div class="form-group">
        <label for="spouseSurname">SURNAME</label>
        <input type="text" class="form-control" id="spouseSurname" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="spouseFirstName">FIRST NAME</label>
        <input type="text" class="form-control" id="spouseFirstName">
      </div>
      <div class="form-group">
        <label for="spouseMiddleName">MIDDLE NAME</label>
        <input type="text" class="form-control" id="spouseMiddleName">
      </div>
      <div class="form-group">
          <label for="spouseOccupation">OCCUPATION</label>
          <input type="text" class="form-control" id="spouseOccupation">
      </div>
      <div class="form-group">
          <label for="spouseEmployerName">EMPLOYER/BUSINESS NAME</label>
          <input type="text" class="form-control" id="spouseEmployerName">
      </div>
      <div class="form-group">
          <label for="spouseBusinessAddress">BUSINESS ADDRESS</label>
          <textarea class="form-control" id="spouseBusinessAddress" rows="2" placeholder="1234 Main St"></textarea>
      </div>
      <div class="form-group">
          <label for="spouseTelNo">TELEPHONE NO.</label>
          <input type="text" class="form-control" id="spouseTelNo">
      </div>
    </div>
  </div>
  
  <div class="row d-flex w-100 ml-1">
    <div class="col-md-6">
      <h3>FATHER</h3>
      <div class="form-group">
          <label for="fatherSurname">SURNAME</label>
          <input type="text" class="form-control" id="fatherSurname" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="fatherFirstName">FIRST NAME</label>
          <input type="text" class="form-control" id="fatherFirstName">
        </div>
        <div class="form-group">
          <label for="fatherMiddleName">MIDDLE NAME</label>
          <input type="text" class="form-control" id="fatherMiddleName">
        </div>
        <div class="form-group">
            <label for="fatherOccupation">OCCUPATION</label>
            <input type="text" class="form-control" id="fatherOccupation">
        </div>
        <div class="form-group">
            <label for="fatherEmployerName">EMPLOYER/BUSINESS NAME</label>
            <input type="text" class="form-control" id="fatherEmployerName">
        </div>
        <div class="form-group">
            <label for="fatherBusinessAddress">BUSINESS ADDRESS</label>
            <textarea class="form-control" id="fatherBusinessAddress" rows="2" placeholder="1234 Main St"></textarea>
        </div>
        <div class="form-group">
          <label for="fatherTelNo">TELEPHONE NO.</label>
          <input type="text" class="form-control" id="fatherTelNo">
      </div>
    </div>
    <div class="col-md-6">
      <h3>MOTHER'S MAIDEN NAME</h3>
      <div class="form-group">
          <label for="motherSurname">SURNAME</label>
          <input type="text" class="form-control" id="motherSurname" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="motherFirstName">FIRST NAME</label>
          <input type="text" class="form-control" id="motherFirstName">
        </div>
        <div class="form-group">
          <label for="motherMiddleName">MIDDLE NAME</label>
          <input type="text" class="form-control" id="motherMiddleName">
        </div>
        <div class="form-group">
            <label for="motherOccupation">OCCUPATION</label>
            <input type="text" class="form-control" id="motherOccupation">
        </div>
        <div class="form-group">
            <label for="motherEmployerName">EMPLOYER/BUSINESS NAME</label>
            <input type="text" class="form-control" id="motherEmployerName">
        </div>
        <div class="form-group">
            <label for="motherBusinessAddress">BUSINESS ADDRESS</label>
            <textarea class="form-control" id="motherBusinessAddress" rows="2" placeholder="1234 Main St"></textarea>
        </div>
        <div class="form-group">
          <label for="motherTelNo">TELEPHONE NO.</label>
          <input type="text" class="form-control" id="motherTelNo">
      </div>
    </div>
  </div>

  <div class="row d-flex justify-content-end w-100 mr-1">
    <button type="submit" class="btn btn-primary ml-3">Submit</button>
  </div>
  
</form>


<div class="row d-flex align-items-center w-100 ml-1">
  <h2>Children</h2>
</div>

<form style="width: 100%;">
  <table class="table w-100" id="tab_logic" style="width: 100%;">
  	<thead class="thead-dark">
  		<tr class="d-flex">
    
  			<th class="col-6">
  				Name
        </th>
        
  			<th class="col-6">
  				Date of Birth
        </th>
        
  		</tr>
    </thead>
    
  	<tbody>
  		<tr class="d-flex" id='addr0'>

  			<td class="col-6">
  			  <input type="text" name='name0' id='name0'  placeholder='Name' class="form-control"/>
        </td>
  			<td class="col-6">
  			  <input type="date" name='mail0' id='bday0' placeholder='Mail' class="form-control"/>
        </td>
      </tr>
      
      <tr id='addr1'></tr>
  	</tbody>
  </table>
    
  <div class="row d-flex justify-content-end w-100">
    <a id="add_row" class="btn btn-primary text-white mr-3">Add Row</a>
    <a id='delete_row' class="btn btn-danger text-white">Delete Row</a>
  </div>
  
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>

  $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td>'+'<td><input name='name' id='name"+i+"'type='text' placeholder='Name' class='form-control input-md'/> </td><td><input name='date_of_birth'  id='bday"+i+"' type='date' placeholder='Mail'  class='form-control input-md'></td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});

</script>

@endsection