@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card">
            <h3> {{ $comic->title }} </h3>
            <img src=" {{ $comic->thumb }} " alt="">
            <p> {{ $comic->description }} </p>
            <span> Price --> € {{ $comic->price }} </span>
        </div>
    </div>
    
@endsection