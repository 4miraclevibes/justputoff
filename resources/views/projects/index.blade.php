@extends('layouts.main')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <div class="card-header">
      <a class="btn btn-primary btn-sm" href="{{ route('projects.create') }}">Create</a>
    </div>
  </div>
  <div class="card mt-2">
    <h5 class="card-header">Projects List</h5>
    <div class="table-responsive text-nowrap p-3">
      <table class="table" id="example">
        <thead>
          <tr class="text-nowrap table-dark">
            <th class="text-white">No</th>
            <th class="text-white">Name</th>
            <th class="text-white">Description</th>
            <th class="text-white">Thumbnail</th>
            <th class="text-white">Technologies</th>
            <th class="text-white">Created By</th>
            <th class="text-white">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($projects as $project)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $project->name }}</td>
            <td>{!! \Str::words(strip_tags($project->description), 5, '...') !!}</td>
            <td>
              @if($project->thumbnail)
                <img src="{{ Storage::url($project->thumbnail) }}" alt="thumbnail" width="50">
              @else
                No Image
              @endif
            </td>
            <td>
              <div class="d-flex flex-wrap gap-1">
                @foreach($project->technologies as $technology)
                  <span class="badge bg-primary">{{ $technology->name }}</span>
                @endforeach
              </div>
            </td>
            <td>{{ $project->user->name }}</td>
            <td>
                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <a href="{{ route('projects.show', $project->id) }}" class="btn btn-info btn-sm">Show</a>
                <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline-block;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- / Content -->
@endsection