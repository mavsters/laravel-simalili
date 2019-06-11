@extends('layouts.layout')

@section('title', "Editar usuario")

@section('content')


    <div class="container">
        <div class="card card-profile shadow mt--300">
            <div class="px-4">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="{{ url('/users') }}">
                                <img class="rounded-circle" src="{{asset('img/icons/Usuario.png')}}">
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
                    <h1>Editar usuario</h1>
                    <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i></div>
                </div>
                <form method="POST" action="{{ url("users/{$user->id}") }}">
                    <div class="mt-3 py-5 border-top text-left">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}
                                <h2>Docente:</h2>
                                <div class="form-group">
                                    <label for="name">Nombre Completo:</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                           disabled
                                           value="{{ old('name', $user->name) }}">
                                </div>

                                @if(isset($docent))
                                <div class="form-group">
                                    <label for="lugar_nac">Lugar de nacimiento:</label>
                                    <input type="text" class="form-control" name="lugar_nac" id="lugar_nac"
                                           disabled
                                           value="{{ old('lugar_nac', $docent->lugar_nac) }}">
                                </div>

                                <div class="form-group">
                                    <label for="edad">Edad:</label>
                                    <input type="text" class="form-control" name="edad" id="edad" disabled
                                           value="{{ old('edad', $docent->edad) }}">
                                </div>

                                <div class="form-group">
                                    <label for="religion">Religión:</label>
                                    <input type="text" class="form-control" name="religion" id="religion" disabled

                                           value="{{ old('religion', $docent->religion) }}">
                                </div>

                                <div class="form-group">
                                    <label for="titulo_prof">Título Profesional:</label>
                                    <input type="text" class="form-control" name="titulo_prof" id="titulo_prof"
                                           disabled
                                           value="{{ old('titulo_prof', $docent->titulo_prof) }}">
                                </div>

                                <div class="form-group">
                                    <label for="tipo_documento">Título Profesional:</label>
                                    <div class="dropdown">
                                        <select id="tipo_documento" name="tipo_documento" disabled
                                                class="btn btn-secondary dropdown-toggle">
                                            <option class="dropdown-item"
                                                    selected>{{ old('tipo_documento', $docent->tipo_documento) }}</option>
                                            <option class="dropdown-item">Cedula de Ciudadania</option>
                                            <option class="dropdown-item">Pasaporte</option>
                                            <option class="dropdown-item">Cedula Extranjera</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="number_id">Número de Identificación:</label>
                                    <input type="text" class="form-control" name="number_id" id="number_id"
                                           disabled
                                           value="{{ old('number_id', $docent->number_id) }}">
                                </div>
                                @else
                                    <b>No existe un Docente para este usuario</b> Por favor cree este usuario con el
                                    mismo <b>Nombre</b> y <b>Correo</b>
                                    <a href="{{ url('/users/new') }}" class="btn btn-warning btn-lg">Crear</a>
                                @endif
                                <hr/>

                                <h2>usuario:</h2>
                                <div class="form-group">
                                    <label for="tipo_usiaro">Tipo de Usuario:</label>
                                    <div class="dropdown">
                                        <select id="tipo_usiaro" name="tipo_usiaro"
                                                class="btn btn-secondary dropdown-toggle">
                                            <option class="dropdown-item" value="{{
                                 old('tipo_usiaro',($user->id_tipousuario == 1)?'Directivo':(($user->id_tipousuario == 2)?'Secretaría':'Normal'))
                                }}"
                                                    selected>
                                                {{
                                 old('tipo_usiaro',($user->id_tipousuario == 1)?'Directivo':(($user->id_tipousuario == 2)?'Secretaría':'Normal'))
                                }}
                                            </option>
                                            @foreach($tipoUsuario as $values)
                                                <option class="dropdown-item"
                                                        value="{{$values->tipo_usuario}}">{{$values->tipo_usuario}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">Correo electrónico:</label>
                                    <input type="email" class="form-control" name="email" id="email" autocomplete="on"

                                           value="{{ old('email', $user->email) }}">
                                </div>

                                <div class="form-group">
                                    <label for="password">Contraseña:</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                    >
                                </div>
                                <hr/>
                                <div class="text-center">
                                    <a href="{{ url('/') }}" class="btn btn-danger btn-lg">Regresar</a>
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
