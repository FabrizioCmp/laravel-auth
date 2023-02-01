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
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->cover_img }}</td>
                        <td>{{ $project->github_link }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
