@extends('template')

@section('conteudo')
    <h1>blog</h1>
    @foreach($posts as $post)
        <hr>
        <h2>{{$post->titulo}}</h2>{{ date('d/m/Y', strtotime($post->created_at)) }}
        <h4>{{$post->conteudo}}</h4>
    @endforeach
@endsection
