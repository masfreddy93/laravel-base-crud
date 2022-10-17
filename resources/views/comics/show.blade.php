@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card">
            <h3> {{ $comic->title }} </h3>
            <img src=" {{ $comic->thumb }} " alt="">
            <p> {{ $comic->description }} </p>
            <span> Price --> € {{ $comic->price }} </span>
        </div>
        <br>
        <a href="{{ route('comics.edit', $comic) }}">Modifica fumetto</a>
        <br>
        <br>
        
        <form action="{{ route('comics.destroy', $comic) }}" method="POST">
            
            @csrf
            @method('DELETE')

            <input type="submit" value="Elimina">
            {{-- <a href="{{ route('comics.destroy', $comic) }}">Elimina</a> --}}
        </form>
    </div>
    
@endsection