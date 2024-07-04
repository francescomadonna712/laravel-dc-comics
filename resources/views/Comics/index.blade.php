@extends('layouts.app')

@section('content')
    <h1>Lista Comics</h1>
    @foreach ($catalogo as $comic)
        <p><a href="/comics/{{ $comic->id }}">{{ $comic->titolo }}</a></p>
    @endforeach
@endsection
