@extends('layouts.layout')

@section('title', "Editar Grado")

@section('content')


    <div class="container">
        <div class="card card-profile shadow mt--300">
            <div class="px-4">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="{{ url('/grades') }}">
                                <img class="rounded-circle" src="{{asset('img/icons/Grado.png')}}">
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
                    <h1>Editar Grado</h1>
                    <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i></div>
                </div>
                <form method="POST" action="{{ url("grades/{$grade->id}") }}">
                    <div class="mt-3 py-5 border-top text-left">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}
                                <h2>Datos del Grado:</h2>

                                @if(isset($grade))
                                    <div class="form-group">
                                        <label for="name">Nombre:</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre"
                                               placeholder="Primaria.."
                                               value="{{ old('name', $grade->nombre) }}">
                                    </div>
                                @else
                                    <b>No existe un grade para este usuario</b> Por favor cree este usuario con el
                                    mismo <b>Nombre</b> y <b>Correo</b>
                                    <a href="{{ url('/grades/new') }}" class="btn btn-warning btn-lg">Crear</a>
                                @endif

                                <hr/>
                                <div class="text-center">
                                    <a href="{{ url('/grades') }}" class="btn btn-danger btn-lg">Regresar</a>
                                    <button type="submit" class="btn btn-primary btn-lg">Actualizar Datos</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection