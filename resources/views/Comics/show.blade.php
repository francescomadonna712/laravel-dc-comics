@extends('layouts.app')

@section('content')
    <div class="card" style="width: 18rem;">
        <img src="{{ $Comic->cover_image }}" alt="" class="card-img-top">
        <h2>{{ $Comic->titolo }}</h2>
        <p><strong>Autore: </strong>{{ $Comic->autore }}</p>
        <p><strong>Casa Editrice: </strong>{{ $Comic->casa_editrice }}</p>
        <p><strong>Prezzo: </strong>{{ $Comic->prezzo }}</p>
        <p><strong>Anno: </strong>{{ $Comic->anno }}</p>
        <p><strong>Voto: </strong>{{ $Comic->voto }}</p>
        <p><strong>Descrizione: </strong>{{ $Comic->descrizione }}</p>
    </div>
    <a href="/comics" class="btn btn-primary mt-4">Torna indietro</a>
@endsection
