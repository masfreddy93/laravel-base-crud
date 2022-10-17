@extends('layouts.app')

@section('content')

    <div class="container">
        <br>
        <form action=" {{ route('comics.store') }} " method="POST">

            @csrf

            <p>
                <input type="text" name="title" placeholder="Nome fumetto" value="{{ old('title') }}">
                    @error('title')
                        <div style="color:red; font-size:12px"> {{ $message }} </div>
                    @enderror
            </p>
            <p>
                <input type="text" name="description" placeholder="Descrizione" value="{{ old('description') }}">
                    @error('description')
                        <div style="color:red; font-size:12px"> {{ $message }} </div>
                    @enderror
            </p>
            <p>
                <input type="text" name="thumb" placeholder="Link Immagine" value="{{ old('thumb') }}">
                    @error('thumb')
                        <div style="color:red; font-size:12px"> {{ $message }} </div>
                    @enderror
            </p>
            <p>
                <input type="text" name="price" value="{{ old('price') }}" placeholder="Prezzo" >
                    @error('price')
                        <div style="color:red; font-size:12px"> {{ $message }} </div>
                    @enderror
            </p>
            <p>
                <input type="text" name="series" placeholder="Serie" value="{{ old('series') }}">
            </p>
            <p>
                <input type="date" name="sale_date" placeholder="Data vendita" value="{{ old('sale_date') }}">
            </p>
            <input type="text" name="type" placeholder="Tipo fumetto" value="{{ old('type') }}">
            
            <br>
            <p>
                <input type="submit" value="Invia">
            </p>

        </form>

        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
    </div>

@endsection
