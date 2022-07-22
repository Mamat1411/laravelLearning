@extends('layout.main')

@section('container')
    <h2>{{ $name }}</h1>
    <h3>{{ $email }}</h3>
    <img src="{{ $image }}" alt="Mamat" width="200px" class="img-thumbnail rounded-pill">
@endsection
