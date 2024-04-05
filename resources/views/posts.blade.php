@extends('layouts/main')

@section('container')
    @foreach ($posts as $blog)
        <div class="container mb-4">
            <h2><a href="post/{{ $blog["slug"] }}">{{ $blog['title'] }}</a></h2>
            <h5>{{ $blog['author'] }}</h5>
        </div>
    @endforeach
@endsection