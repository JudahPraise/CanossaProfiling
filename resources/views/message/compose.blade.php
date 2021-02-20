@extends('admin.message')

@section('page_level_css')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection

@section('message')

<h3>Inbox</h3>

<form action="{{ route('message.store') }}" method="POST" enctype="multipart/form-data">
  @csrf 
    <div class="form-row">

      <div class="form-group col-md-6">
        <label for="inputEmail4">Send To</label>
        <input type="text" class="form-control" name="recipient" id="inputEmail4">
      </div>

      <div class="form-group col-md-6">
        <label for="inputState">Send To All</label>
        <select id="inputState" name="recipientAll" class="form-control">
          <option selected>Choose...</option>
          <option>Elementary</option>
          <option>Junior High School</option>
          <option>Senior High School</option>
          <option>College</option>
          <option>Staff</option>
          <option>Maintenance</option>
          <option class="text-primary">Verification Notice</option>
        </select>
      </div>
    </div>

    <div class="form-row col-mb-12 mb-3">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Link</label>
            <input type="text" name="link" class="form-control" id="inputEmail4">
        </div>

        <div class="form-group col-md-6">
            <label>Add Attachment</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="file" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
        </div>
      </div>

   


    <button type="submit" class="btn btn-primary">Send</button>
  </form>

@endsection