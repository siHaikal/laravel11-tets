@extends('layouts/main')

@section('container')
    <h1>About Me</h1>
    <ul>
        <li>{{ $name }}</li>
        <li>{{ $umur }}</li>
        <li>{{ $jurusan }}</li>
    </ul>
@endsection