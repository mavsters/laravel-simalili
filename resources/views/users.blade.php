@extends('layouts.layout')

@section('content')
    <h1>{{$title}}</h1>

    @forelse($users as $user)
        <li>{{ $user->name }} <a href="{{ url("/users/{$user->id}") }}">Ver detalles</a></li>
    @empty
        <li>No hay usuarios registrados.</li>
    @endforelse

    <!-- Other Check -->

    @unless(empty($users))
        Hay datos
    @else
        No hay usuarios registrados
    @endunless
@endsection
