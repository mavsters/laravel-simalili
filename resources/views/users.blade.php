@extends('layouts.layout')

@section('content')
    <h1>{{$title}}</h1>
    @forelse($users as $user)
        <li>{{ $user }}</li>
    @empty
        <li>No hay datos, perdon</li>
    @endforelse

    <!-- Other Check -->

    @unless(empty($users))
        Hay datos
    @else
        No hay usuarios registrados
    @endunless
@endsection
