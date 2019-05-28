@extends('layouts.layout')

@section('title', "Estudiante {$student->id}")

@section('content')
    <div class="container">
        <div class="card card-profile shadow mt--300">
            <div class="px-4">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="{{ url('/students') }}">
                                <img class="rounded-circle" src="{{asset('img/icons/Estudiantes.png')}}">
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

                    <h1>Estudiante #{{ $student->id }}</h1>

                    <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i></div>
                </div>
                <form method="POST" action="{{ url('students') }}">
                    <div class="mt-3 py-5 border-top text-center">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <h2>Estudiante:</h2>
                                <p>Nombre del usuario: {{ $student->nombre_est }}</p>
                                <p>Apellido del usuario: {{ $student->apellido_est }}</p>
                                <p>Documento: {{ $student->doc_id }}</p>
                                <p>Número Doc: {{ $student->num_id }}</p>
                                <p>Lugar de nacimiento: {{ $student->lugar_nac }}</p>
                                <p>Fecha de Nacimiento: {{ $student->fecha_nac }}</p>
                                <p>Edad: {{ $student->edad }}</p>
                                <p>Religion: {{ $student->religion }}</p>
                                <p>Nombre del Tutor: {{ $student->nombre_tutor }}</p>
                                <p>Tipo de estudiante: {{ $student->tipo_est }}</p>
                                <p>Genero: {{ $student->genero }}</p>
                                <hr/>
                                <a href="{{ url('/students') }}" class="btn btn-danger btn-lg">Regresar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
