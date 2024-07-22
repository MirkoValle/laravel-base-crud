@extends('layouts.app')

@section('page-title', 'homepage')

@section('main-content')
    <section class="home">
        @foreach ( $animals as $animal )
        <article>
            <div>
                <h1>{{$animal->nome}}</h1>
                <p> <strong>SPECIE:</strong> {{$animal->specie}}</p>
                <p> <strong>RAZZA:</strong> {{$animal->razza}}</p>
            </div>
            <img src={{$animal->url_img}} alt="Foto di {{$animal->nome}}">
            <button><a href="{{ route('animals.show', $animal)}}">Clicca per più info</a></button>
        </article>
        @endforeach
    </section>
@endsection
