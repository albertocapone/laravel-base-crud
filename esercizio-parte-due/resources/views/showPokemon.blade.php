@extends('layouts.mainLayout')

@section('content')
<div class="showEditCreatePKMN">
    <h3>
        NOME: {{$pokemon['Name']}}
    </h3>
    <h3>
        NDEX: {{$pokemon['Ndex']}}
    </h3>
    <h3>
        TIPO: {{$pokemon['Type']}}
    </h3>
    <h3>
        ABILITA: {{$pokemon['Ability']}}
    </h3>

    <a href="{{route('editPokemon', $pokemon['id'])}}">
        <h6>
            EDIT
        </h6>
    </a>
    <a href="{{route('destroyPokemon', $pokemon['id'])}}">
        <h6>
            DESTROY
        </h6>
    </a>
</div>
    
@endsection