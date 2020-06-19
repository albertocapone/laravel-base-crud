@extends('layouts.mainLayout')

@section('content')
<div class="showEditCreatePKMN">
    <form action="{{route('storePokemon')}}" method="POST">
        @csrf
        @method('POST')
        <div>
            <label for="Name">NAME:</label>
            <input type="text" name="Name">
        </div>
    
        <div>
            <label for="Ndex">NDEX:</label>
            <input type="text" name="Ndex">
        </div>
    
        <div>
            <label for="Type">TYPE:</label>
            <input type="text" name="Type">
        </div>

        <div>
            <label for="Ability">ABILITY:</label>
            <input type="text" name="Ability">
        </div>
        <div>
            <input type="submit" name=Submit value="SUBMIT">
        </div>
    </form>
</div>

@endsection