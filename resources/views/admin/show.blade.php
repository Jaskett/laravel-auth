@extends('layouts.admin')

@section('page_name') | {{ $project->title }}  @endsection

@section('content')
<div class="container-fluid mt-4">
    <div class="card p-5">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <img src="{{ $project->preview }}" alt="{{ $project->title }}">
            </div>
            <div class="col-md-7">
                <h2>{{ $project->title }}</h2>
                <p>{{ $project->link }}</p>
                <p>{{ $project->description }}</p>
            </div>
        </div>
    </div>
</div>
@endsection