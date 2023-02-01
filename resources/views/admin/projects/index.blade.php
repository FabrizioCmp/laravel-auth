@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista progetti</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome Progetto</th>
                    <th>Cover</th>
                    <th>Link github</th>
                    <th>Manage</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->cover_img }}</td>
                        <td>{{ $project->github_link }}</td>
                        <td class="">
                            <a class="me-2" href="#">edit</a>
                            <form action="{{ route('admin.projects.destroy', $project['id']) }}" method="POST">
                                @csrf
                                @method("delete")

                                <button class="btn btn-danger d-inline">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="w-100 text-center">
            <a class="btn btn-success " href="{{ Route('admin.projects.create') }}">new Project</a>
        </div>
    </div>
@endsection
