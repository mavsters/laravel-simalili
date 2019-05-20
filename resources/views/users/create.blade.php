@extends('layouts.layout')

@section('title', "Crear usuario")

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
                    <h1>Usuario</h1>
                    <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i></div>
                </div>
                <form method="POST" action="{{ url('users') }}">
                    <div class="mt-3 py-5 border-top text-left">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">

                                {{ csrf_field() }}
                                <h2>Datos del Docente:</h2>
                                <div class="form-group">
                                    <label for="name">Nombre Completo:</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                           placeholder="Pedro Perez"
                                           value="{{ old('name') }}">
                                </div>

                                <div class="form-group">
                                    <label for="lugar_nac">Lugar de nacimiento:</label>
                                    <input type="text" class="form-control" name="lugar_nac" id="lugar_nac"
                                           placeholder="Tunja"
                                           value="{{ old('lugar_nac') }}">
                                </div>

                                <div class="form-group">
                                    <label for="edad">Edad:</label>
                                    <input type="text" class="form-control" name="edad" id="edad" placeholder="20"
                                           value="{{ old('edad') }}">
                                </div>

                                <div class="form-group">
                                    <label for="religion">Religión:</label>
                                    <input type="text" class="form-control" name="religion" id="religion"
                                           placeholder="Catolico"
                                           value="{{ old('religion') }}">
                                </div>

                                <div class="form-group">
                                    <label for="titulo_prof">Título Profesional:</label>
                                    <input type="text" class="form-control" name="titulo_prof" id="titulo_prof"
                                           placeholder="Ing..."
                                           value="{{ old('titulo_prof') }}">
                                </div>

                                <div class="form-group">
                                    <label for="tipo_documento">Título Profesional:</label>
                                    <div class="dropdown">
                                        <select id="tipo_documento" name="tipo_documento"
                                                class="btn btn-secondary dropdown-toggle"
                                                value="{{ old('tipo_documento') }}">
                                            <option class="dropdown-item" selected>Seleccione...</option>
                                            <option class="dropdown-item">Cedula de Ciudadania</option>
                                            <option class="dropdown-item">Pasaporte</option>
                                            <option class="dropdown-item">Cedula Extranjera</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="number_id">Número de Identificación:</label>
                                    <input type="text" class="form-control" name="number_id" id="number_id"
                                           placeholder="10...." autocomplete="off"
                                           value="{{ old('number_id') }}">
                                </div>

                                <hr/>

                                <h2>Datos del usuario:</h2>
                                <div class="form-group">
                                    <label for="tipo_usiaro">Tipo de Usuario:</label>
                                    <div class="dropdown">
                                        <select id="tipo_usiaro" name="tipo_usiaro"
                                                class="btn btn-secondary dropdown-toggle"
                                                value="{{ old('tipo_usiaro') }}">
                                            <option class="dropdown-item" selected>Seleccione...</option>
                                            <option class="dropdown-item">Directivo</option>
                                            <option class="dropdown-item">Secretaría</option>
                                            <option class="dropdown-item">Normal</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo electrónico:</label>
                                    <input type="email" class="form-control" name="email" id="email" autocomplete="on"
                                           placeholder="pedro@example.com"
                                           value="{{ old('email') }}">
                                </div>

                                <div class="form-group">
                                    <label for="password">Contraseña:</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                           placeholder="Mayor a 6 caracteres">
                                </div>

                                <hr/>
                                <div class="text-center">
                                    <a href="{{ url('/users') }}" class="btn btn-danger btn-lg">Regresarusuarios</a>
                                    <button type="submit" class="btn btn-success btn-lg">Crear usuario</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
