@extends('layouts.mainLayout')

@section('content')
<div id="pokedex">
    <h2>POKEDEX</h2>
    <ul>
        @foreach ($pokedex as $pokemon)
        <li>
             <a href="{{route('showPokemon', $pokemon['id'])}}">
                {{$pokemon['Ndex']}}. {{$pokemon['Name']}}
             </a>
        </li>
        @endforeach
    </ul>
    
    <a href="{{route('createPokemon')}}">
        <h3>
            CATCH A NEW POKEMON!
        </h3>
    </a>
</div>
    
@endsection