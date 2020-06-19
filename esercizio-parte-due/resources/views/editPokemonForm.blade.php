@extends('layouts.mainLayout')

@section('content')

<form action="{{route('updatePokemon', $pokemon['id'])}}" method="POST">

    @csrf
    @method('POST')

    <label for="Name">NAME:</label>
    <input type="text" name="Name" value="{{$pokemon['Name']}}">

    <label for="Ndex">NDEX:</label>
    <input type="text" name="Ndex" value="{{$pokemon['Ndex']}}">

    <label for="Type">TYPE:</label>
    <input type="text" name="Type" value="{{$pokemon['Type']}}">

    <label for="Ability">ABILITY:</label>
    <input type="text" name="Ability" value="{{$pokemon['Ability']}}">

    <input type="submit" name=Submit value="SUBMIT">
</form>
@endsection