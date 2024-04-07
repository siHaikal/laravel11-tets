@extends('layouts/main')

@section('container')
    @foreach ($posts as $blog)
        <div class="container mb-4">
            <h2><a href="post/{{ $blog->title }}">{{ $blog->title }}</a></h2>
            <p>{{ $blog->excerpt }}</p>
        </div>
    @endforeach
@endsection