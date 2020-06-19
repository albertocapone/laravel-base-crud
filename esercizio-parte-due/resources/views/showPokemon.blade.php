@extends('layouts.mainLayout')

@section('content')
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
@endsection