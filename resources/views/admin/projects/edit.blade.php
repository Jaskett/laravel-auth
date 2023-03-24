@extends('layouts.admin')

@section('page_name') | Edit Project {{ $project->title }}  @endsection

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Edit Project</h1>
            <h3>{{ $project->title }}</h3>
            <form
                action="{{ route('admin.projects.update', $project->id) }}"
                method="POST"
                class="mt-5"
            >
                @csrf
                @method('PUT')

                <div class="mb-3 row">
                    <label for="title" class="col-form-label col-2">
                        Title*
                    </label>
                    <div class="col-10">
                        <input
                            type="text"
                            id="title"
                            name="title"
                            class="form-control @error ('title') is-invalid @enderror"
                            value="{{ old('title', $project->title) }}"
                            max="255"
                            required
                        >
                        @error('title')
                            <span class="d-block mt-2 text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="description" class="col-form-label col-2">
                        Description*
                    </label>
                    <div class="col-10">
                        <textarea
                            name="description"
                            id="description"
                            class="form-control @error ('description') is-invalid @enderror"
                            rows="6"
                            maxlength="3000"
                            required
                        >{{ old('description', $project->description) }}</textarea>
                        @error('description')
                            <span class="d-block mt-2 text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="link" class="col-form-label col-2">
                        Link*
                    </label>
                    <div class="col-10">
                        <input
                            type="text"
                            id="link"
                            name="link"
                            class="form-control @error ('link') is-invalid @enderror"
                            value="{{ old('link', $project->link ) }}"
                            max="255"
                            required
                        >
                        @error('link')
                            <span class="d-block mt-2 text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="preview" class="col-form-label col-2">
                        Preview link*
                    </label>
                    <div class="col-10">
                        <input
                            type="text"
                            id="preview"
                            name="preview"
                            class="form-control @error ('preview') is-invalid @enderror"
                            value="{{ old('preview', $project->preview ) }}"
                            max="255"
                            required
                        >
                        @error('preview')
                            <span class="d-block mt-2 text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="btn-box mt-5">
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-warning text-light">
                        <i class="fa-solid fa-rotate-left"></i>
                    </a>
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection