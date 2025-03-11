@extends('layouts.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-4">
        <h5 class="card-header">Edit Project</h5>
        <div class="card-body">
            <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="name" class="form-label">Nama Project</label>
                        <input type="text" 
                               class="form-control @error('name') is-invalid @enderror" 
                               id="name" 
                               name="name" 
                               value="{{ old('name', $project->name) }}" 
                               required>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="description" class="form-label">Deskripsi Project</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" 
                                  id="editor" 
                                  name="description" 
                                  rows="6">{{ old('description', $project->description) }}</textarea>
                        @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="thumbnail" class="form-label">Thumbnail Project</label>
                        @if($project->thumbnail)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="Current Thumbnail" class="img-thumbnail" width="200">
                            </div>
                        @endif
                        <input type="file" 
                               class="form-control @error('thumbnail') is-invalid @enderror" 
                               id="thumbnail" 
                               name="thumbnail" 
                               accept="image/*">
                        <small class="text-muted">Biarkan kosong jika tidak ingin mengubah thumbnail</small>
                        @error('thumbnail')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="category" class="form-label">Kategori Project</label>
                        <select class="form-control @error('category') is-invalid @enderror" 
                                id="category" 
                                name="category" 
                                required>
                            <option value="">Pilih Kategori</option>
                            <option value="product" {{ old('category', $project->category) == 'product' ? 'selected' : '' }}>Product</option>
                            <option value="project" {{ old('category', $project->category) == 'project' ? 'selected' : '' }}>Project</option>
                        </select>
                        @error('category')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="images" class="form-label">Gambar Project</label>
                        <input type="file" 
                               class="form-control @error('images.*') is-invalid @enderror" 
                               id="images" 
                               name="images[]" 
                               accept="image/*" 
                               multiple>
                        <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar</small>
                        @error('images.*')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label class="form-label">Gambar Saat Ini</label>
                        @foreach($project->projectImages as $image)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $image->image) }}" alt="Project Image" class="img-thumbnail" width="200">
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label class="form-label">Teknologi yang Digunakan</label>
                        <div class="row g-3">
                            @foreach($technologies as $technology)
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" 
                                           type="checkbox" 
                                           name="technologies[]" 
                                           value="{{ $technology->id }}"
                                           id="tech{{ $technology->id }}"
                                           {{ in_array($technology->id, old('technologies', $project->technologies->pluck('id')->toArray())) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="tech{{ $technology->id }}">
                                        {{ $technology->name }}
                                    </label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @error('technologies')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="demo" class="form-label">Link Demo</label>
                        <input type="url" 
                               class="form-control @error('demo') is-invalid @enderror" 
                               id="demo" 
                               name="demo" 
                               value="{{ old('demo', $project->demo) }}" 
                               placeholder="https://example.com">
                        <small class="text-muted">Masukkan URL lengkap termasuk http:// atau https://</small>
                        @error('demo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="status" class="form-label">Status Project</label>
                        <select class="form-control @error('status') is-invalid @enderror" 
                                id="status" 
                                name="status" 
                                required>
                            <option value="">Pilih Status</option>
                            <option value="pending" {{ old('status', $project->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="on_going" {{ old('status', $project->status) == 'on_going' ? 'selected' : '' }}>On Going</option>
                            <option value="done" {{ old('status', $project->status) == 'done' ? 'selected' : '' }}>Done</option>
                        </select>
                        @error('status')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('projects.index') }}" class="btn btn-secondary me-1">Kembali</a>
                        <button type="submit" class="btn btn-primary">Update Project</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
