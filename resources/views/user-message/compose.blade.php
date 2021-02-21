@extends('user-message.index')

@section('page_level_css')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection

@section('user-message')


<div class="hero__content grid is-vertical is-vertically-centered has-no-padding is-desktop-up">
    <div class="column is-full is-flex is-vertically-centered">

        <h4>Create Message</h4>
        <form action="{{ route('user-message.store') }}" method="POST" enctype="multipart/form-data">
          @csrf 
            <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputEmail4">Send To</label>
                  <input type="text" class="form-control" name="send_to" value="Admin" id="inputEmail4" placeholder="Admin">
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

            <button type="submit" class="btn btn-primary"><i class="far fa-paper-plane mr-2"></i>Send</button>
        </form>

    </div>
</div>

@endsection