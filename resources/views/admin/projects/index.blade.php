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
                        <td class="align-middle">{{ $project->id }}</td>
                        <td class="align-middle">{{ $project->name }}</td>
                        <td class="align-middle" class="w-50">
                            @if ($project->cover_img)
                               <img src="{{asset('storage/' . $project->cover_img)}}" alt="" class="w-25 "> 
                            @endif
                        </td>
                        <td class="align-middle">{{ $project->github_link }}</td>
                        <td class="">
                            <a class="btn btn-primary mb-1" href="{{route('admin.projects.edit', $project->id)}}">edit</a>
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
