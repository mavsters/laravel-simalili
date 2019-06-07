@extends('layouts.layout')

@section('title', "Matricula {$enrollment->id}")

@section('content')
    <div class="container">
        <div class="card card-profile shadow mt--300">
            <div class="px-4">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="{{ url('/students') }}">
                                <img class="rounded-circle" src="{{asset('img/icons/Matricula.png')}}">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                    </div>
                    <div class="col-lg-4 order-lg-1">
                        <div class="card-profile-stats d-flex justify-content-center">
                            <div style="background:white">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <span class="heading">Por favor corrige los errores debajo:</span>
                                        <span class="description">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">

                    <h1>Matricula #{{ $enrollment->id }}</h1>
                    <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i></div>
                </div>
                <form method="POST" action="{{ url('students') }}">
                    <div class="mt-3 py-5 border-top text-center">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <h2>Matricula:</h2>

                                <p>tipo_matricula: {{ $enrollment->tipo_matricula }}</p>
                                <p>id grado: {{ $enrollment->id_grado }}</p>
                                <p>id requisito: {{ $enrollment->id_requisito }}</p>
                                <p>id estudiante: {{ $enrollment->id_estudiante }}</p>
                                <p>id acudiente: {{ $enrollment->id_acudiente }}</p>
                                <hr/>
                                <a href="{{ url('/') }}" class="btn btn-danger btn-lg">Regresar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
