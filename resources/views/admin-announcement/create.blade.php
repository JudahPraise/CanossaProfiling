@extends('admin.announcement')

@section('announcement')
{{-- <div class="row m-5 d-flex justify-content-center">

    <div class="col-lg-12">
        <h3 style="font-size: 2.5rem"><i class="fas fa-bullhorn ml-4 rotate-n-15"></i>Create Announcement</h3>
    </div>

    <div class="row d-flex align-items-center w-100">

        <div class="col-lg-8 p-4">
            <form action="{{ route('announcement.submit') }}" method="POST" enctype="multipart/form-data">
              @csrf 
                <div class="form-group">
                  <label for="announcementTitle">Title of Announcement</label>
                  <input type="text" class="form-control" name="ann_title" id="announcementTitle">
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="">Start of Announcement</label>
                        <input type="date" name="ann_start" class="form-control">
                    </div>
                    <div class="col">
                        <label for="">End of Announcement</label>
                        <input type="date" name="ann_end" class="form-control">
                    </div>
                  </div>
                  <div class="form-group mt-2">
                    <label for="exampleFormControlSelect1">Affected Department</label>
                    <select class="form-control" name="ann_affected" id="exampleFormControlSelect1">
                      <option class="text-muted" selected null>Choose</option>
                      <option>Elementary</option>
                      <option>Junior High School</option>
                      <option>Senior High School</option>
                      <option>College</option>
                      <option>All</option>
                    </select>
                  </div>
                  <div class="form-group mt-3">
                    <label for="exampleFormControlTextarea1">Other Information</label>
                    <textarea class="form-control" name="ann_other" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <div class="form-group mt-3">
                    <label for="annLink">Link</label>
                    <input type="url" name="link" id="annLink">
                  </div>
                  <div class="form-group mt-3">
                      <label for="">Attachment</label>
                    <div class="custom-file">
                        <input type="file" name="attachment" class="custom-file-input" id="customFile">
                        <label class="custom-file-label">Choose file</label>
                    </div>
                  </div>
                  
                <button type="submit" value="Submit Form" class="btn btn-primary">Submit</button>

              </form>
        </div>
    
        <div class="col-lg-4 align-self-start mt-5">
            <div class="card w-100 rounded">
                <div class="card-body m-0 d-flex flex-column">
                    <h4 class="card-title m-3"><i class="fas fa-scroll ml-4"></i>Latest Announcements</h4>
                    @forelse($announcements as $announcement)
                      <div class="card rounded" style="border-left: 3px solid blue">
                        <div class="card-body">
                          <h5>{{ $announcement->ann_title }}</h5>
                          <p>{{ $announcement->ann_end }}</p>
                        </div>
                      </div>
                    @empty
                    <div class="card rounded" style="border-left: 3px solid blue">
                      <div class="card-body">
                          No announcement
                      </div>
                    </div>
                    @endforelse
                    
                </div>
              </div>
        </div>

    </div>
    
</div> --}}
<h3>Create Announcement</h3>

<form action="{{ route('announcement.submit') }}" method="POST" enctype="multipart/form-data">
@csrf 
    <div class="form-row">

      <div class="form-group col-md-6">
        <label for="announcementTitle">Title of Announcement</label>
        <input type="text" class="form-control" name="ann_title" id="announcementTitle">
      </div>

      <div class="form-group col-md-3">
        <label for="">Start of Announcement</label>
        <input type="date" name="ann_start" class="form-control">
      </div>

      <div class="form-group col-md-3">
        <label for="">End of Announcement</label>
        <input type="date" name="ann_end" class="form-control">
      </div>

      <div class="form-group col-md-3">
        <label for="exampleFormControlSelect1">Affected Department</label>
        <select class="form-control" name="ann_affected" id="exampleFormControlSelect1">
          <option class="text-muted" selected null>Choose</option>
          <option>Elementary</option>
          <option>Junior High School</option>
          <option>Senior High School</option>
          <option>College</option>
          <option>All</option>
        </select>
      </div>


      <div class="form-group col-md-4">
          <label for="inputEmail4">Link</label>
          <input type="text" name="link" class="form-control" id="inputEmail4">
      </div> 

      <div class="form-group col-md-5">
          <label>Add Attachment</label>
          <div class="custom-file">
            <input type="file" name="attachment" class="custom-file-input" id="customFile">
            <label class="custom-file-label"  for="customFile">Choose file</label>
          </div>
      </div>
      
      <div class="form-group col-md-12">
        <label for="exampleFormControlTextarea1">Other Information</label>
        <textarea class="form-control" name="ann_other" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div> 

    </div>

    <button type="submit" value="Submit Form" class="btn btn-primary">Create</button>
  </form>
@endsection