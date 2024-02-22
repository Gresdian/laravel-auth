@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.projects.store') }}" method="post">
                    <div class="form-group my-3">
                        @csrf
                        <label for="title" class="control-label">Name</label>
                        <input type="text" name="name" id="name" placeholder="name" class="form-control" required>
                    </div>
                    <div class="form-group my-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" cols="100" rows="10"></textarea>
                    </div>
                    <div class="row my-3">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label my-label" for="startDateProject">Start Date Project</label>
                                <input class="form-control" type="date" name="date_start" id="startDateProject" required>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label my-label" for="endDateProject">Finish Date Project</label>
                                <input class="form-control" type="date" name="date_end" id="startDateProject" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
