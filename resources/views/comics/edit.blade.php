@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <form action="{{ route('comics.update', $comic) }}" method="POST">

        @csrf
        @method('PUT')

        <p>
            <input type="text" name="title" placeholder="Nome fumetto" value="{{ $comic->title }}">
                @error('title')
                    <div style="color:red; font-size:12px"> {{ $message }} </div>
                @enderror
        </p>
        <p>
            <input type="text" name="description" placeholder="Descrizione" value="{{ $comic->description }}">
                @error('description')
                    <div style="color:red; font-size:12px"> {{ $message }} </div>
                @enderror
        </p>
        <p>
            <input type="text" name="thumb" placeholder="Link Immagine" value="{{ $comic->thumb }}">
                @error('thumb')
                    <div style="color:red; font-size:12px"> {{ $message }} </div>
                @enderror
        </p>
        <p>
            <input type="text" name="price" value="{{ $comic->price }}" placeholder="Prezzo" >
                @error('price')
                    <div style="color:red; font-size:12px"> {{ $message }} </div>
                @enderror
        </p>
        <p>
            <input type="text" name="series" placeholder="Serie" value="{{ $comic->series }}">
        </p>
        <p>
            <input type="date" name="sale_date" placeholder="Data vendita" value="{{ $comic->sale_date }}">
        </p>
        <input type="text" name="type" placeholder="Tipo fumetto" value="{{ $comic->type }}">
        
        <br>
        <p>
            <input type="submit" value="Invia">
        </p>

    </form>

</div>
@endsection