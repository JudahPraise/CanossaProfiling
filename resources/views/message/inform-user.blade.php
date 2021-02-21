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
        <input type="text" class="form-control" name="send_to" value="{{ $employee->employee_id }}">
      </div>

      <div class="form-group col-md-6">
        <label for="inputState">Send To All</label>
        <select id="inputState" name="send_to_all" class="form-control">
          <option selected disabled value="">Choose...</option>
          <option>Elementary</option>
          <option>Junior High School</option>
          <option>Senior High School</option>
          <option>College</option>
          <option>All</option>
        </select>
      </div>
    </div>

    <div class="form-row d-flex flex-column col-mb-12 mb-3">
      <label for="">Message Suggestions</label>
      <div class="row">

        <a class="btn btn-outline-primary rounded-pill m-2" 
        onclick="document.getElementById('message').innerHTML = 'Kindly complete your data records on your portfolio!'">
        Complete Your Data
        </a>

        <a class="btn btn-outline-primary rounded-pill m-2" onclick="document.getElementById('message').innerHTML = 'Kindly update your data records on your portfolio!'">
          Update Your Data
        </a>

        <a class="btn btn-outline-primary rounded-pill m-2" onclick="document.getElementById('message').innerHTML = 'Kindly change your profile picture!'">
          Change your profile picture
        </a>

      </div>
    </div>

    <div class="form-row col-mb-12 mb-3">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" name="message" id="message" rows="3"></textarea>
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

    <button type="submit" class="btn btn-primary"><i class="far fa-paper-plane"></i>Send</button>
  </form>

@endsection