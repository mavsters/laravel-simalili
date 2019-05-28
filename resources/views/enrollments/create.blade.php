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
                                <h2>Matricula:</h2>
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
                                            @if(isset($grade))
                                                @foreach($grade as $value)
                                                    <option class="dropdown-item">{{$value->nombre}}</option>
                                                @endforeach
                                            @endif
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

                                    </div>
                                </div>
                                <hr/>

                                <h2>Familliares del Estudiante:</h2>
                                <div class="nav-wrapper">
                                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab"
                                               data-toggle="tab" href="#tabs-icons-text-1" role="tab"
                                               aria-controls="tabs-icons-text-1" aria-selected="true"><i
                                                    class="ni ni-cloud-upload-96 mr-2"></i>Madre</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab"
                                               data-toggle="tab" href="#tabs-icons-text-2" role="tab"
                                               aria-controls="tabs-icons-text-2" aria-selected="false"><i
                                                    class="ni ni-bell-55 mr-2"></i>Padre</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab"
                                               data-toggle="tab" href="#tabs-icons-text-3" role="tab"
                                               aria-controls="tabs-icons-text-3" aria-selected="false"><i
                                                    class="ni ni-calendar-grid-58 mr-2"></i>Acudiente</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="tabs-icons-text-1"
                                                 role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                                <!-- Hidden Element -->
                                                <input type="hidden" class="form-control" name="parentesco"
                                                       id="parentesco" value="MADRE"/>
                                                <!--/ Hidden Element -->
                                                <div class="form-group">
                                                    <label for="madre_nombre">Nombre:</label>
                                                    <input type="text" class="form-control" name="madre_nombre"
                                                           id="madre_nombre"

                                                           value="{{ old('madre_nombre') }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="madre_apellido">Apellido:</label>
                                                    <input type="text" class="form-control" name="madre_apellido"
                                                           id="madre_apellido"

                                                           value="{{ old('madre_apellido') }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="madre_cedula">Cedula:</label>
                                                    <input type="text" class="form-control" name="madre_cedula"
                                                           id="madre_cedula"
                                                           value="{{ old('madre_cedula') }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="madre_telefono">Télefono:</label>
                                                    <input type="text" class="form-control" name="madre_telefono"
                                                           id="madre_telefono"

                                                           value="{{ old('madre_telefono') }}">
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                           id="madre_acudiente">
                                                    <label class="form-check-label" for="madre_acudiente">
                                                        ¿Es Acudiente?
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                                                 aria-labelledby="tabs-icons-text-2-tab">
                                                <!-- Hidden Element -->
                                                <input type="hidden" class="form-control" name="parentesco"
                                                       id="parentesco" value="PADRE"/>
                                                <!--/ Hidden Element -->
                                                <div class="form-group">
                                                    <label for="padre_nombre">Nombre:</label>
                                                    <input type="text" class="form-control" name="padre_nombre"
                                                           id="padre_nombre"

                                                           value="{{ old('padre_nombre') }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="padre_apellido">Apellido:</label>
                                                    <input type="text" class="form-control" name="padre_apellido"
                                                           id="padre_apellido"

                                                           value="{{ old('padre_apellido') }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="padre_cedula">Cedula:</label>
                                                    <input type="text" class="form-control" name="padre_cedula"
                                                           id="padre_cedula"
                                                           value="{{ old('padre_cedula') }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="padre_telefono">Télefono:</label>
                                                    <input type="text" class="form-control" name="padre_telefono"
                                                           id="padre_telefono"

                                                           value="{{ old('padre_telefono') }}">
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                           id="padre_acudiente">
                                                    <label class="form-check-label" for="padre_acudiente">
                                                        ¿Es Acudiente?
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel"
                                                 aria-labelledby="tabs-icons-text-3-tab">
                                                <!-- Hidden Element -->
                                                <input type="hidden" class="form-control" name="parentesco"
                                                       id="parentesco" value="ACUDIENTE"/>
                                                <!--/ Hidden Element -->
                                                <div class="form-group">
                                                    <label for="acudiente_nombre">Nombre:</label>
                                                    <input type="text" class="form-control" name="acudiente_nombre"
                                                           id="acudiente_nombre"

                                                           value="{{ old('acudiente_nombre') }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="acudiente_apellido">Apellido:</label>
                                                    <input type="text" class="form-control" name="acudiente_apellido"
                                                           id="acudiente_apellido"

                                                           value="{{ old('acudiente_apellido') }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="acudiente_cedula">Cedula:</label>
                                                    <input type="text" class="form-control" name="acudiente_cedula"
                                                           id="acudiente_cedula"
                                                           value="{{ old('acudiente_cedula') }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="acudiente_telefono">Télefono:</label>
                                                    <input type="text" class="form-control" name="acudiente_telefono"
                                                           id="acudiente_telefono"

                                                           value="{{ old('acudiente_telefono') }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="parentesco">Parentesco:</label>
                                                    <div class="dropdown">
                                                        <select id="parentesco" name="parentesco"
                                                                class="btn btn-secondary dropdown-toggle"
                                                                value="{{ old('parentesco') }}">
                                                            <option class="dropdown-item" selected>Seleccione...
                                                            </option>
                                                            @foreach($parentesco as $value)
                                                                <option
                                                                    class="dropdown-item">{{$value->tipo_persona}}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <hr/>
                                <h2>Estudiante:</h2>
                                <div class="form-group">
                                    <label for="nombre_est">Nombre:</label>
                                    <input type="text" class="form-control" name="nombre_est" id="nombre_est"

                                           value="{{ old('nombre_est') }}">
                                </div>
                                <div class="form-group">
                                    <label for="apellido_est">Apellido:</label>
                                    <input type="text" class="form-control" name="apellido_est" id="apellido_est"

                                           value="{{ old('apellido_est') }}">
                                </div>

                                <div class="form-group">
                                    <label for="genero">Genero:</label>
                                    <div class="dropdown">
                                        <select id="genero" name="genero"
                                                class="btn btn-secondary dropdown-toggle"
                                                value="{{ old('genero') }}">
                                            <option class="dropdown-item" selected>Seleccione...</option>
                                            <option class="dropdown-item">Hombre</option>
                                            <option class="dropdown-item">Mujer</option>

                                        </select>
                                    </div>
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

                                           value="{{ old('num_id') }}">
                                </div>

                                <div class="form-group">
                                    <label for="lugar_nac">Lugar de Nacimiento:</label>
                                    <input type="text" class="form-control" name="lugar_nac" id="lugar_nac"

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
                                           value="{{ old('edad') }}">
                                </div>

                                <div class="form-group">
                                    <label for="religion">Religión:</label>
                                    <input type="text" class="form-control" name="religion" id="religion"

                                           value="{{ old('religion') }}">
                                </div>

                                <hr/>
                                <div css="text-center">
                                    <a href="{{ url('/') }}" class="btn btn-danger btn-lg">Regresar</a>
                                    <button type="submit" class="btn btn-success btn-lg">Crear Matricula</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                    @if ($grade->isNotEmpty())
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
                            @foreach($grade as $value)
                                <tr>
                                    <th scope="row">{{ $count++ }}</th>
                                    <td>{{ $value->nombre }}</td>
                                    <td>
                                        <form action="{{ route('grades.destroy', $value) }}"
                                              method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <a href="{{ route('grades.show', $value) }}"
                                               class="btn btn-link"><span
                                                    class="fa fa-eye"></span></a>
                                            <a href="{{ route('grades.edit', $value) }}"
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
