@extends('layouts.app')

@section('page-title')
    Edit {{ $animal->nome }}
@endsection

@section('main-content')
<section class="create">
    @if ($errors->any())
    <div class="error-message">
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container">
        <div class="form_area">
            <p class="title">Modifica {{ $animal->nome}}</p>
            <form class="all_form" action="{{ route('animals.update', $animal)}}" method="POST" id="creation-form">
                @csrf
                @method("PUT")
                <div class="form_group">
                    <label class="sub_title" for="nome">Nome</label>
                    <input placeholder="Inserisci il Nome" class="form_style" type="text" id="nome" name="nome" value="{{ old('name', $animal->nome)}}">
                </div>
                <div class="form_group">
                    <label class="sub_title" for="specie">Specie</label>
                    <input placeholder="Inserisci la Specie" class="form_style" type="text" id="specie" name="specie" value="{{old('nome', $animal->specie)}}">
                </div>
                <div class="form_group">
                    <label class="sub_title" for="razza">Razza</label>
                    <input placeholder="Inserisci la Razza" class="form_style" type="text" id="razza" name="razza" value="{{old('razza', $animal->razza)}}">
                </div>
                <div class="form_group">
                    <label class="sub_title" for="eta">Età</label>
                    <input placeholder="Inserisci l'eta" class="form_style" type="number" id="eta" name="eta" value="{{old('eta', $animal->eta)}}">
                </div>
                <div class="form_group">
                    <label class="sub_title" for="sesso">Sesso</label>
                    <input placeholder="Inserisci il sesso" class="form_style" type="text" id="sesso" name="sesso" value="{{old('sesso', $animal->sesso)}}">
                </div>
                <div class="form_group">
                    <label class="sub_title" for="colore">Colore</label>
                    <input placeholder="Inserisci il colore" class="form_style" type="text" id="colore" name="colore" value="{{old('colore', $animal->colore)}}">
                </div>
                <div class="form_group">
                    <label class="sub_title" for="peso">Peso</label>
                    <input placeholder="Inserisci il peso" class="form_style" type="number" id="peso" name="peso" value="{{old('peso', $animal->peso)}}">
                </div>
                <div class="form_group">
                    <label class="sub_title" for="altezza">Altezza</label>
                    <input placeholder="Inserisci l'altezza" class="form_style" type="number" id="altezza" name="altezza" value="{{old('altezza', $animal->altezza)}}">
                </div>
                <div class="form_group">
                    <label class="sub_title" for="url_img">Immagine</label>
                    <input placeholder="Inserisci l'indirizzo URL dell'immagine" class="form_style" type="text" id="url_img" name="url_img" value="{{old('url_img', $animal->url_img)}}">
                </div>
                <div class="form_group">
                    <label class="sub_title" for="note">Note</label>
                    <input placeholder="Inserisci le note" class="form_style" type="text" id="note" name="note" value="{{old('note', $animal->note)}}">
                </div>

                <div>
                    <input class="btn" type="submit" value="Modifica {{$animal->nome}}">
                    <input class="btn reset" type="reset" value="Reset">
                </div>
            </form>
        </div>
    </div>

</section>
@endsection

@section('custom-scripts')
    @vite('resources/js/creation-confirm.js')
@endsection
