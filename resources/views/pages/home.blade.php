@extends('layouts.app')

@section('page-title', 'Animal Reserve')

@section('main-content')
    @if(session('deleted-message'))
        <div class="deleted-message"> <p>{{session('deleted-message')}}</p></div>
    @endif
    <section class="home">
        @foreach ( $animals as $animal )
        <article>
            <div>
                <h1>{{$animal->nome}}</h1>
                <p> <strong>SPECIE:</strong> {{$animal->specie}}</p>
                <p> <strong>RAZZA:</strong> {{$animal->razza}}</p>
            </div>
            <img src={{$animal->url_img}} alt="Foto di {{$animal->nome}}">
            <div class="button">
                <button><a href="{{ route('animals.show', $animal)}}">Dettagli</a></button>
                <button><a href="{{ route('animals.edit', $animal)}}">Modifica</a></button>
                <form action="{{ route('animals.destroy', $animal)}}" method="POST" class="delete" >
                    @csrf
                    @method('DELETE')
                    <button type="submit">Elimina</button>
                </form>
            </div>
        </article>
        @endforeach
    </section>
@endsection


@section('custom-scripts')
    @vite('resources/js/delete-confirm.js')
@endsection
