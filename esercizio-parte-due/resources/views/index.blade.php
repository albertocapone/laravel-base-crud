@extends('layouts.mainLayout')

@section('content')
    <h2>POKEDEX</h2>
    @foreach ($pokedex as $pokemon)
        <a href="{{route('showPokemon', $pokemon['id'])}}">
            <li>
               N:{{$pokemon['Ndex']}} {{$pokemon['Name']}}
            </li>
        </a>
    @endforeach
    <a href="{{route('createPokemon')}}">
        <h3>
            CATCH A NEW POKEMON!
        </h3>
    </a>
@endsection