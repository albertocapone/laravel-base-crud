@extends('layouts.mainLayout')

@section('content')

<form action="{{route('storePokemon')}}" method="POST">

    @csrf
    @method('POST')

    <label for="Name">NAME:</label>
    <input type="text" name="Name">

    <label for="Ndex">NDEX:</label>
    <input type="text" name="Ndex">

    <label for="Type">TYPE:</label>
    <input type="text" name="Type">

    <label for="Ability">ABILITY:</label>
    <input type="text" name="Ability" >

    <input type="submit" name=Submit value="SUBMIT">
</form>
@endsection