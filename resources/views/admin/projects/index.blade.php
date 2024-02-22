@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h2>Projects</h2>
                        </div>
                        <div>
                            <a href="{{ route('admin.projects.create') }}" class="btn btn-sm btn-primary">Add project</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Date start</th>
                                <th>Date end</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($project as $project)
                                <tr>
                                    <td>{{ $project->id }}</td>
                                    <td>{{ $project->slug }}</td>
                                    <td>{{ Str::limit($project->description, 20, '(...)') }}</td>
                                    <td>{{ $project->date_start }}</td>
                                    <td>{{ $project->date_end }}</td>
                                    <td>
                                        <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}"
                                            class="btn btn-sm btn-square btn-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
