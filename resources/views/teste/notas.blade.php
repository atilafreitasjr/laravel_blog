@extends('template')

@section('conteudo')
    
    <h1>Anotações</h1>

    @foreach($notas as $nota)
        <h3>{{$nota}}</h3>
    @endforeach

@stop