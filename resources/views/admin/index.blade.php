@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Project list') }}</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($projects as $project)
                            <li class="list-group-item">
                                <strong>Title:</strong> {{ $project->title }}
                                <br>
                                <strong>Preview:</strong>
                                <img class="w-50" src="{{ $project->preview }}" alt="{{ $project->title }}">
                                <br>
                                <strong>Link:</strong> {{ $project->link }}
                                <br>
                                <strong>Description:</strong>
                                <br>
                                {{ $project->description }}

                                <div class="mt-3">
                                    <a href="{{ route('projects.show', $project->id) }}" class="btn btn-info text-light">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning text-light">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>

                                    {{-- PROVVISORIO --}}
                                    <a href="#" class="btn btn-danger text-light">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection