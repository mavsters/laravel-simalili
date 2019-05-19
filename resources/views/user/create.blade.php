@extends('layouts.layout')
@section('title',"Crear")
@section('content')


    <form method="POST" action="{{ url('user/crear') }}">
        {{ csrf_field() }}

        <button type="submit">Crear usuario</button>
    </form>
    <a href="{{ url()->previous() }}">Regresar</a>
@endsection
