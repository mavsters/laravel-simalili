@extends('layouts.layout')
@section('title',"Usuario {$user->id}")
@section('content')
    <h1>Usuario #{{$user->id}}</h1>
    <br/>
    Mostrando detalle del usuario: {{$user->id}}

    <a href="{{ url()->previous() }}">Regresar</a>
@endsection
