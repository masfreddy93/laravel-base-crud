@extends('layouts.app')

@section('content')
    
    <div class="container">
        <br>
        <form action="">
            <input type="text" name="title" placeholder="Nome fumetto">
            <input type="text" name="description" placeholder="Descrizione">
            <input type="text" name="thumb" placeholder="Link Immagine">
            <input type="text" name="price" placeholder="Prezzo">
            <input type="text" name="series" placeholder="Serie">
            <input type="text" name="sale_date" placeholder="Data vendita">
            <input type="text" name="type" placeholder="Tipo fumetto">

            <input type="submit" value="Invia">
        </form>
    </div>

@endsection