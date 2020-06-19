@extends('layouts.mainLayout')

@section('content')
<div class="showEditCreatePKMN">
    <form action="{{route('updatePokemon', $pokemon['id'])}}" method="POST">
        @csrf
        @method('POST')
        <div>
            <label for="Name">NAME:</label>
            <input type="text" name="Name" value="{{$pokemon['Name']}}">
        </div>
    
        <div>
            <label for="Ndex">NDEX:</label>
            <input type="text" name="Ndex" value="{{$pokemon['Ndex']}}">
        </div>
    
        <div>
            <label for="Type">TYPE:</label>
            <input type="text" name="Type" value="{{$pokemon['Type']}}">
        </div>

        <div>
            <label for="Ability">ABILITY:</label>
            <input type="text" name="Ability" value="{{$pokemon['Ability']}}">
        </div>
        <div>
            <input type="submit" name=Submit value="SUBMIT">
        </div>
    </form>
</div>

@endsection