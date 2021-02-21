@extends('family-background.index')

@section('children-section')
<form class="w-100 mt-4 d-flex flex-column" action="{{ route('child.update', $child->id) }}" method="POST">
    @csrf
    @method('put')
    <div class="form-row">
      <div class="col-lg-7">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ $child->name }}" class="form-control" placeholder="City">
      </div>
      <div class="col">
          <label for="birth">Date of Birth</label>
        <input type="date" id="birth" name="date_of_birth" value="{{ $child->date_of_birth }}"  class="form-control" placeholder="State">
      </div>
    </div> 
    <div class="row align-self-end mr-1">
      <button type="submit" class="btn btn-primary mt-3 align-self-lg-end mr-2">Update</button>
      <a href="{{ url()->previous() }}" class="btn btn-secondary mt-3 text-white">Cancel</a>
    </div>
    
  </form>
@endsection