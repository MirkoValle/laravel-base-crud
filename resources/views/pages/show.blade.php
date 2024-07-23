@extends('layouts.app')

@section('page-title', 'Show animal')

@section('main-content')
<section class="show">
    <img src={{$animal->url_img}} alt="{{$animal->nome}}">
    <section>
        <h1>{{$animal->nome}}</h1>
        <p> <strong>Specie: </strong> {{$animal->specie}}</p>
        <p> <strong>Razza: </strong> {{$animal->razza}}</p>
        <p> <strong>Età: </strong> {{$animal->eta}}</p>
        <p><strong>Sesso: </strong> {{$animal->sesso}}</p>
        <p> <strong>Colore: </strong> {{$animal->colore}}</p>
        <p> <strong>Peso: </strong> {{$animal->peso}} Kg <strong>Altezza: </strong> {{$animal->altezza}} Cm</p>
        <p> <strong>Info: </strong> {{$animal->note}}</p>
    </section>
    <div>
        <button><a href="{{ route('animals.index')}}">Torna alla home</a></button>
    </div>

</section>
@endsection
