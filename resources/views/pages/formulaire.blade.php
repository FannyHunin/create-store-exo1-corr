@extends('welcome')

@section('content')
    <form action="/pokemons" method="post">
        @csrf
        Nom: <input type="text" name="nom">
        Type: <input type="text" name="type">
        Lvl: <input type="number" name="level">
        <button type="submit">Submit</button>
    </form>
@endsection