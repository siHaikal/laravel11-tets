@extends('layouts/main')

@section('container')
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>

    <a href="/blog">Back</a>
@endsection
