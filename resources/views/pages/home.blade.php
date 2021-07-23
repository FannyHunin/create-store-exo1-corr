@extends('welcome')

@section('content')
<h1>Home Page</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nom</th>
        <th scope="col">Type</th>
        <th scope="col">Niveau</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pkmnData as $pokemon)
        <tr>
          <th scope="row">{{$pokemon->id}}</th>
          <td>{{$pokemon->nom}}</td>
          <td>{{$pokemon->type}}</td>
          <td>{{$pokemon->level}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection