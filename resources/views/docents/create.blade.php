@extends('layouts.layout')

@section('title', "Crear Docente")

@section('content')
    <div class="container">
        <div class="card card-profile shadow mt--300">
            <div class="px-4">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="{{ url('/docents') }}">
                                <img class="rounded-circle" src="{{asset('img/icons/Docente.png')}}">
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
                    <h1>Docente</h1>
                    <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i></div>
                </div>
                <form method="POST" action="{{ url('docents/new') }}">
                    <div class="mt-3 py-5 border-top text-left">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <center>
                                    {{ csrf_field() }}
                                    <h2>Docente:</h2>
                                    <div class="form-group">
                                        <label for="name">Nombre Completo:</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                               style="width: 350px"
                                               value="{{ old('name') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="lugar_nac">Lugar de nacimiento:</label>
                                        <input type="text" class="form-control" name="lugar_nac" id="lugar_nac"
                                               style="width: 350px"
                                               value="{{ old('lugar_nac') }}">
                                    </div>

                                    <label for="fecha_nac"> Fecha de Nacimiento</label>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input id="fecha_nac" name="fecha_nac" class="form-control datepicker"

                                                   type="text" value="{{date('m/d/Y')}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="edad">Edad:</label>
                                        <input type="text" class="form-control" name="edad" id="edad"
                                               style="width: 350px"
                                               value="{{ old('edad') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="religion">Religión:</label>
                                        <input type="text" class="form-control" name="religion" id="religion"
                                               style="width: 350px"
                                               value="{{ old('religion') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="titulo_prof">Título Profesional:</label>
                                        <input type="text" class="form-control" name="titulo_prof" id="titulo_prof"
                                               style="width: 350px"
                                               value="{{ old('titulo_prof') }}">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h2>Tipo de Documento:</h2>
                                                <div class="dropdown">
                                                    <select id="tipo_documento" name="tipo_documento"
                                                            class="btn btn-secondary dropdown-toggle"
                                                            value="{{ old('tipo_documento') }}">
                                                        <option class="dropdown-item" value="" selected>Seleccione...
                                                        </option>
                                                        <option class="dropdown-item" value="Cedula de Ciudadania">
                                                            Cedula de Ciudadania
                                                        </option>
                                                        <option class="dropdown-item" value="Pasaporte">Pasaporte
                                                        </option>
                                                        <option class="dropdown-item" value="Cedula Extranjera">Cedula
                                                            Extranjera
                                                        </option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h2>Genero:</h2>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="Hombre"
                                                           name="genero[0]">
                                                    <label class="form-check-label" for="genero[0]">
                                                        Hombre
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="Mujer"
                                                           name="genero[1]">
                                                    <label class="form-check-label" for="genero[1]">
                                                        Mujer
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="number_id">Número de Identificación:</label>
                                        <input type="text" class="form-control" name="number_id" id="number_id"
                                               style="width: 350px"
                                               value="{{ old('number_id') }}">
                                    </div>

                                    <hr/>
                                    <div class="text-center">
                                        <a href="{{ url('/') }}" class="btn btn-danger btn-lg">Regresar</a>
                                        <button type="submit" class="btn btn-success btn-lg">Crear Docente</button>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                </form>
                @if ($docents->isNotEmpty())
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{$count = 1}}
                        @foreach($docents as $docent)
                            <tr>
                                <th scope="row">{{ $count++ }}</th>
                                <td>{{ $docent->nombre_completo }}</td>
                                <td>
                                    <form action="{{ route('docents.destroy', $docent) }}"
                                          method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <a href="{{ route('docents.show', $docent) }}"
                                           class="btn btn-link"><span
                                                class="fa fa-eye"></span></a>
                                        <a href="{{ route('docents.edit', $docent) }}"
                                           class="btn btn-link"><span
                                                class="fa fa-edit"></span></a>
                                        <button type="submit" class="btn btn-link"><span
                                                class="fa fa-trash"></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No hay usuarios registrados.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
