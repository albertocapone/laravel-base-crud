@extends('layouts.mainLayout')

@section('content')
    <h2>POKEDEX</h2>
    @foreach ($pokedex as $pokemon)
        <a href="">
            <li>
               N:{{$pokemon['Ndex']}} {{$pokemon['Name']}}
            </li>
        </a>
    @endforeach
@endsection