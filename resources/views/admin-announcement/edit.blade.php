@extends('admin.announcement')

@section('announcement')
<h3>Edit Announcement</h3>

<form action="{{ route('announcement.update', $announcement->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT') 
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="announcementTitle">Title of Announcement</label>
        <input type="text" class="form-control" name="ann_title" value="{{ $announcement->ann_title }}" id="announcementTitle">
      </div>

      <div class="form-group col-md-3">
        <label for="ann_start">Start of Announcement</label>
        <input type="date" id="ann_start" name="ann_start" value="{{ $announcement->ann_start }}" class="form-control">
      </div>

      <div class="form-group col-md-3">
        <label for="ann_end">End of Announcement</label>
        <input type="date" id="ann_end" name="ann_end" value="{{ $announcement->ann_end }}" class="form-control">
      </div>

      <div class="form-group col-md-3">
        <label for="exampleFormControlSelect1">Affected Department</label>
        <select class="form-control" name="ann_affected" value="{{ $announcement->ann_affected }}" @if(old('type', $announcement->ann_affected) === 'Swiss System') 'selected' @endif id="exampleFormControlSelect1">
          <option>Elementary</option>
          <option>Junior High School</option>
          <option>Senior High School</option>
          <option>College</option>
          <option>All</option>
        </select>
      </div>


      <div class="form-group col-md-4">
          <label for="inputEmail4">Link</label>
          <input type="text" name="link" value="{{ $announcement->link }}" class="form-control" id="inputEmail4">
      </div> 

      <div class="form-group col-md-5">
          <label>Add Attachment</label>
          <div class="custom-file">
            <input type="file" name="attachment" value="{{ $announcement->attachment }}" class="custom-file-input" id="customFile">
            <label class="custom-file-label"  for="customFile">Choose file</label>
          </div>
      </div>
      
      <div class="form-group col-md-12">
        <label for="exampleFormControlTextarea1">Other Information</label>
        <textarea class="form-control" name="ann_other" id="exampleFormControlTextarea1" rows="3">{{ $announcement->ann_other }}</textarea>
    </div> 

    </div>

    <button type="submit" value="Submit Form" class="btn btn-primary">Update</button>
  </form>
@endsection