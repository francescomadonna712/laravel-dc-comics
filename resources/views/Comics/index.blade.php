@extends('layouts.app')

@section('content')
    <h1>Lista Comics</h1>
    @foreach ($catalogo as $comic)
        <p>{{ $comic->titolo }}</p>
    @endforeach
@endsection
