@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Crea il tuo fumetto</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3>Compila il form e invia</h3>
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Inserisci Titolo</label>
                        <input type="text" class="form-control" id="" placeholder="Titolo" name="titolo">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci Cover Image</label>
                        <input type="text" class="form-control" id="" placeholder="cover_image"
                            name="cover_image">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci Autore</label>
                        <input type="text" class="form-control" id="" placeholder="Autore" name="autore">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci Casa Editrice</label>
                        <input type="text" class="form-control" id="" placeholder="casa_editrice"
                            name="casa_editrice">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci Prezzo</label>
                        <input type="text" class="form-control" id="" placeholder="Prezzo" name="prezzo">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci Anno</label>
                        <input type="text" class="form-control" id="" placeholder="Anno" name="anno">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci Voto</label>
                        <input type="text" class="form-control" id="" placeholder="Voto" name="voto">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci Descrizione</label>
                        <input type="text" class="form-control" id="" placeholder="descrizione"
                            name="descrizione">
                    </div>
                    <button type="submit" class="btn btn-primary">Pusha</button>
                </form>
            </div>
        </div>
    </div>
@endsection
