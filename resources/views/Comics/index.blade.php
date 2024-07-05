@extends('layouts.app')

@section('content')
    <h1>Lista Comics</h1>
    @foreach ($catalogo as $comic)
        <div><a href="/comics/{{ $comic->id }}">
                <img src="{{ $comic->cover_image }}" alt="" width="250" height="350">
        </div>
        <p><a href="/comics/{{ $comic->id }}">{{ $comic->titolo }}</a></p>
    @endforeach
@endsection
