@extends('layouts.layout')

@section('title', "Crear Matricula")

@section('content')
    <div class="container">
        <div class="card card-profile shadow mt--300">
            <div class="px-4">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="{{ url('/enrollments') }}">
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
                    <h1>Matricula</h1>
                    <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i></div>
                </div>
                <form method="POST" action="{{ url('enrollments') }}">
                    <div class="mt-3 py-5 border-top text-left">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">

                                {{ csrf_field() }}
                                <h2>Datos del Matricula:</h2>
                                <div class="form-group">
                                    <label for="tipo_matricula">Tipo de Matricula:</label>
                                    <div class="dropdown">
                                        <select id="tipo_matricula" name="tipo_matricula"
                                                class="btn btn-secondary dropdown-toggle"
                                                value="{{ old('tipo_matricula') }}">
                                            <option class="dropdown-item" selected>Seleccione...</option>
                                            <option class="dropdown-item">Nuevo</option>
                                            <option class="dropdown-item">Antigüo</option>

                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="id_grado">Grado:</label>
                                    <div class="dropdown">
                                        <select id="id_grado" name="id_grado"
                                                class="btn btn-secondary dropdown-toggle"
                                                value="{{ old('id_grado') }}">
                                            <option class="dropdown-item" selected>Seleccione...</option>
                                            @foreach($grade as $value)
                                                <option class="dropdown-item">{{$value->nombre}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <label for="requisito">Requisitos</label>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="requisito[0]">
                                            <label class="form-check-label" for="requisito[0]">
                                                Pago inscripción
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="requisito[1]">
                                            <label class="form-check-label" for="requisito[1]">
                                                Paz y Salvo
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="requisito[2]">
                                            <label class="form-check-label" for="requisito[2]">
                                                SIMAT
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="requisito[3]">
                                            <label class="form-check-label" for="requisito[3]">
                                                Formulario de Inscripción
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="requisito[4]">
                                            <label class="form-check-label" for="requisito[4]">
                                                Aprovación Entrevista
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="requisito[5]">
                                            <label class="form-check-label" for="requisito[5]">
                                                EPS
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="requisito[7]">
                                            <label class="form-check-label" for="requisito[7]">
                                                Acta Matricula
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="requisito[8]">
                                            <label class="form-check-label" for="requisito[8]">
                                                Contrato Matricula
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="requisito[9]">
                                            <label class="form-check-label" for="requisito[9]">
                                                Notas (Año pasado)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="requisito[10]">
                                            <label class="form-check-label" for="requisito[10]">
                                                Renovación con Acta
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="requisito[11]">
                                            <label class="form-check-label" for="requisito[11]">
                                                Registro Civil
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="requisito[12]">
                                            <label class="form-check-label" for="requisito[12]">
                                                Fotos
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="requisito[13]">
                                            <label class="form-check-label" for="requisito[13]">
                                                Carnet Vacuna
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="requisito[14]">
                                            <label class="form-check-label" for="requisito[14]">
                                                Default checkbox
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <h2>Datos del Acudiente:</h2>
                                <div class="form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre"
                                           placeholder="Nombre..."
                                           value="{{ old('nombre') }}">
                                </div>

                                <div class="form-group">
                                    <label for="apellido">Apellido:</label>
                                    <input type="text" class="form-control" name="apellido" id="apellido"
                                           placeholder="Apellido..."
                                           value="{{ old('apellido') }}">
                                </div>

                                <div class="form-group">
                                    <label for="cedula">Cedula:</label>
                                    <input type="text" class="form-control" name="cedula" id="cedula"
                                           placeholder="Cedula..."
                                           value="{{ old('cedula') }}">
                                </div>

                                <div class="form-group">
                                    <label for="telefono">Télefono:</label>
                                    <input type="text" class="form-control" name="telefono" id="telefono"
                                           placeholder="Télefono..."
                                           value="{{ old('telefono') }}">
                                </div>


                                <div class="form-group">
                                    <label for="parentesco">Parentesco:</label>
                                    <div class="dropdown">
                                        <select id="parentesco" name="parentesco"
                                                class="btn btn-secondary dropdown-toggle"
                                                value="{{ old('parentesco') }}">
                                            <option class="dropdown-item" selected>Seleccione...</option>
                                            @foreach($parentesco as $value)
                                                <option class="dropdown-item" selected>{{$value->tipo_persona}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <hr/>
                                <h2>Datos del Estudiante:</h2>
                                <div class="form-group">
                                    <label for="nombre_est">Nombre:</label>
                                    <input type="text" class="form-control" name="nombre_est" id="nombre_est"
                                           placeholder="Nombre..."
                                           value="{{ old('nombre_est') }}">
                                </div>
                                <div class="form-group">
                                    <label for="apellido_est">Apellido:</label>
                                    <input type="text" class="form-control" name="apellido_est" id="apellido_est"
                                           placeholder="Apellido..."
                                           value="{{ old('apellido_est') }}">
                                </div>

                                <div class="form-group">
                                    <label for="doc_id">Documento de Identificación:</label>
                                    <div class="dropdown">
                                        <select id="doc_id" name="doc_id"
                                                class="btn btn-secondary dropdown-toggle"
                                                value="{{ old('doc_id') }}">
                                            <option class="dropdown-item" selected>Seleccione...</option>
                                            <option class="dropdown-item">Cedula de Ciudadania</option>
                                            <option class="dropdown-item">Pasaporte</option>
                                            <option class="dropdown-item">Cedula Extranjera</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="num_id">Número de Identificación:</label>
                                    <input type="text" class="form-control" name="num_id" id="num_id"
                                           placeholder="Apellido..."
                                           value="{{ old('num_id') }}">
                                </div>

                                <div class="form-group">
                                    <label for="lugar_nac">Lugar de Nacimiento:</label>
                                    <input type="text" class="form-control" name="lugar_nac" id="lugar_nac"
                                           placeholder="Lugar de Nacimiento..."
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
                                               placeholder="Select date"
                                               type="text" value="{{date('m/d/Y')}}">
                                    </div>
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

                                <hr/>
                                <div class="text-center">
                                    <a href="{{ url('/enrollments') }}" class="btn btn-danger btn-lg">Regresar</a>
                                    <button type="submit" class="btn btn-success btn-lg">Crear Matricula</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
