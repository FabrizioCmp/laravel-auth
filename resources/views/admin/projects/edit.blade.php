@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="mt-3" action="{{Route("admin.projects.update", $project->id), $project->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="mb-3">
                <label class="form-label">Project name</label>
                <input type="text" name="name" class="form-control w-25" value="{{$project->name}}">
            </div>

            <div class="mb-3" >
                <label for="form-label">Cover</label>
                <input type="file" name="cover_img" class="form-control w-50">
            </div>
            
            <div class="mb-3" >
                <label for="form-label">Github link</label>
                <input type="text" name="github_link" class="form-control w-50" value="{{$project->github_link}}">
            </div>
            <div>
                <button class="btn btn-success">Update</button>
            </div>
        </form>
    </div>
@endsection