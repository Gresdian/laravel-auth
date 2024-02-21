@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{ $project->name }}</h2>
                <p>{{ $project->slug }}</p>
                <p>{{ $project->description }}</p>
            </div>
        </div>
    </div>
@endsection
