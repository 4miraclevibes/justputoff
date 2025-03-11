@extends('layouts.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Detail Project</h5>
            <div>
                <a href="{{ route('projects.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning btn-sm">Edit</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-12">
                    @if($project->thumbnail)
                        <img src="{{ asset('storage/' . $project->thumbnail) }}" 
                             alt="Project Thumbnail" 
                             class="img-fluid rounded mb-3" 
                             style="max-height: 300px; width: auto;">
                    @endif
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <h4>{{ $project->name }}</h4>
                    <p class="text-muted">
                        Dibuat oleh: {{ $project->user->name }} | 
                        Tanggal: {{ $project->created_at->format('d F Y') }}
                    </p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="description-content">
                        {!! $project->description !!}
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <h5>Teknologi yang Digunakan:</h5>
                    <div class="d-flex flex-wrap gap-2">
                        @forelse($project->technologies as $technology)
                            <span class="badge bg-primary">
                                <i class="{{ $technology->icon }} fs-4"></i>
                                <span class="fs-6">{{ $technology->name }}</span>
                            </span>
                        @empty
                            <p class="text-muted">Tidak ada teknologi yang ditentukan</p>
                        @endforelse
                    </div>
                </div>
            </div>

            @if($project->projectDetails->count() > 0)
            <div class="row">
                <div class="col-md-12">
                    <h5 class="mb-3">Detail Project</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($project->projectDetails as $detail)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $detail->detail }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .description-content {
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    .description-content img {
        max-width: 100%;
        height: auto;
    }
</style>
@endpush
