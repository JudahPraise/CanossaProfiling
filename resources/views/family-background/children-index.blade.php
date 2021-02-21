@extends('family-background.index')

@section('children-section')
<table class="table table-hover text-center" style="width: 98%;" >
    <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Date of Birth</th>
          <th scope="col">Action</th>
        </tr>
    </thead>
    @if(!empty($family_background->children))
        <tbody>
          @forelse($family_background->children as $child)
            <tr>
              <td>{{ $child->name }}</td>
              <td>{{ $child->date_of_birth }}</td>
              <td class="d-flex">
                <a href="{{ route('child.edit', $child->id) }}" class="btn btn-primary text-white mr-2">Edit</a>
                <form action="{{ route('child.delete', $child->id) }}" method="POST">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger text-white"">Remove</button>
                </form>
              </td>
            </tr>
          @empty  
            <tr>
              <td class="text-center" colspan="3">
                <p class="card-text font-italic text-muted">Add data</p>
              </td>
            </tr>
          @endforelse
        </tbody>
    @else
        <tr>
          <td class="text-center" colspan="3">
            <p class="card-text font-italic text-muted">Add data</p>
          </td>
        </tr>
    @endif
</table>
@endsection