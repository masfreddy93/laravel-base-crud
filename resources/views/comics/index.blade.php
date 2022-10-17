@extends('layouts.app')

@section('content')
    <h2>Elenco comics</h2>

    <section>
        <div class="container">
            <a style="float: right" href=" {{ route('comics.create') }} ">Inserisci comic</a>
        </div>
    </section>
    <br>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Thumb</th>
                <th>Price</th>
                <th>Series</th>
                <th>Sale Date</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $c)
                <tr>
                    <td> {{ $c->id }} </td>
                    <td>
                        <a href=" {{ route('comics.show', $c) }} ">
                            {{ $c->title }}
                        </a>
                    </td>
                    <td> {{ $c->description }} </td>
                    <td> {{ $c->thumb }} </td>
                    <td> {{ $c->price }} </td>
                    <td> {{ $c->series }} </td>
                    <td> {{ $c->sale_date }} </td>
                    <td> {{ $c->type }} </td>
                    <td>
                        <a href="{{ route('comics.edit', $c) }}">Modifica</a>
                    </td>
                    <td>
                        <form action="{{ route('comics.destroy', $c) }}" method="POST">

                            @csrf
                            @method('DELETE')

                            <input type="submit" value="Elimina">
                            {{-- <a href="{{ route('comics.destroy', $comic) }}">Elimina</a> --}}
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
