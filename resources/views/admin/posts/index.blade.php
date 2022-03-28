@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista Posts</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">titolo</th>
                <th scope="col">slug</th>
                <th scope="col">data</th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->slug }}</td>
                <td>{{ $post->created_at }}</td>
            </tr>
            @empty
            <tr>
                <td collspan="4">
                    <h3>Non ci sono posts</h3>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection