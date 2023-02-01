@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="mt-3" action="admin.project.store" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Project name</label>
                <input type="text" name="name" class="form-control w-25">
            </div>

            <div class="mb-3" >
                <label for="form-label">Cover link</label>
                <input type="text" name="cover_img" class="form-control w-50">
            </div>
            
            <div class="mb-3" >
                <label for="form-label">Github link</label>
                <input type="text" name="github_link" class="form-control w-50">
            </div>
            <div>
                <button class="btn btn-success"> Create</button>
            </div>
        </form>
    </div>
@endsection