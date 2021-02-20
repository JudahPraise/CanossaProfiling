@extends('user-pds.main-pds')

@section('portfolio')
<div class="row w-100 h-100 d-flex flex-column align-items-center justify-content-around">
  
    <div class="row w-100 d-flex justify-content-between mb-2 ml-1" style="margin-right: 2rem">
      <h3 class="ml-4">Family Background</h3>
      @if(!empty($family_background))
      <a href="{{ route('family.edit', $family_background->id) }}" class="btn btn-primary text-white">Edit</a>
      @else
      <a href="{{ route('family.create') }}" class="btn btn-success text-white">Add</a>
      @endIf
    </div>
    
    @include('family-background._family')
    

  <div class="row w-100 d-flex justify-content-between mt-3 mb-2 ml-1" >
      <h3>Children</h3>
      <button type="button" class="btn btn-success mr-4" data-toggle="modal" data-target="#staticBackdrop">
        Add
      </button>
  </div>

  @yield('children-section')

</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Input Child</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('child.store') }}"">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Child Name</label>
            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Date of Birth</label>
            <input type="date" class="form-control" name="date_of_birth" id="exampleInputPassword1">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>


@endsection