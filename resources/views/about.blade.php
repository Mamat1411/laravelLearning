@extends('layout.main')
@section('title', 'About Page')

@section('container')
    <h2>{{ $name }}</h1>
    <h3>{{ $email }}</h3>
    <img src="{{ $image }}" alt="Mamat" width="200px">
@endsection
