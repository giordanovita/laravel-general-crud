@extends('layout.main-layout')


@section('component')

    <h2>
        Esito incontro:
       <h2>  {{$match -> team1}}  -  {{$match -> team2}} </h2>
    </h2>

    <h4>
        {{$match -> team1}} : {{$match -> point1}}
    </h4>

    <h4>
        {{$match -> team2}} : {{$match -> point2}}
    </h4>

    <h5>{{$match -> result}}</h5>
    
@endsection