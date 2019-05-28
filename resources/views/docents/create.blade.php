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

                                {{ csrf_field() }}
                                <h2>Docente:</h2>
                                <div class="form-group">
                                    <label for="name">Nombre Completo:</label>
                                    <input type="text" class="form-control" name="name" id="name"

                                           value="{{ old('name') }}">
                                </div>

                                <div class="form-group">
                                    <label for="lugar_nac">Lugar de nacimiento:</label>
                                    <input type="text" class="form-control" name="lugar_nac" id="lugar_nac"

                                           value="{{ old('lugar_nac') }}">
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

                                <div class="form-group">
                                    <label for="titulo_prof">Título Profesional:</label>
                                    <input type="text" class="form-control" name="titulo_prof" id="titulo_prof"

                                           value="{{ old('titulo_prof') }}">
                                </div>

                                <div class="form-group">
                                    <label for="tipo_documento">Tipo de Documento:</label>
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
                                    <label for="number_id">Número de Identificación:</label>
                                    <input type="text" class="form-control" name="number_id" id="number_id"

                                           value="{{ old('number_id') }}">
                                </div>

                                <hr/>
                                <div class="text-center">
                                    <a href="{{ url('/') }}" class="btn btn-danger btn-lg">Regresar</a>
                                    <button type="submit" class="btn btn-success btn-lg">Crear usuario</button>
                                </div>
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
                            @foreach($docents as $docent)
                                <tr>
                                    <th scope="row">{{ $docent->id }}</th>
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
