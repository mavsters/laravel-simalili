@extends('layouts.layout')

@section('title', "Crear Asignatura")

@section('content')
    <div class="container">
        <div class="card card-profile shadow mt--300">
            <div class="px-4">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="{{ url('/subjects') }}">
                                <img class="rounded-circle" src="{{asset('img/icons/Asignatura.png')}}">
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
                    <h1>Asignatura</h1>
                    <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i></div>
                </div>
                <form method="POST" action="{{ url('subjects/new') }}">
                    <div class="mt-3 py-5 border-top text-left">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">

                                {{ csrf_field() }}
                                <h2>Datos de la Asignatura:</h2>
                                <div class="form-group">
                                    <label for="nombre_asignatura">Nombre de la Asignatura:</label>
                                    <input type="text" class="form-control" name="nombre_asignatura"
                                           id="nombre_asignatura"

                                           value="{{ old('nombre_asignatura') }}">
                                </div>

                                <div class="form-group">
                                    <label for="nombre_curso">Nombre Curso:</label>
                                    <div class="dropdown">
                                        <select id="nombre_curso" name="nombre_curso"
                                                class="btn btn-secondary dropdown-toggle"
                                                value="{{ old('nombre_curso') }}">
                                            <option class="dropdown-item" selected>Seleccione...</option>
                                            <option class="dropdown-item">A</option>
                                            <option class="dropdown-item">B</option>
                                            <option class="dropdown-item">C</option>
                                            <option class="dropdown-item">D</option>

                                        </select>
                                    </div>
                                </div>
                                <hr/>
                                <h2>Docente asignado</h2>
                                <div class="form-group">
                                    <label for="docente_name">Docente:</label>
                                    <div class="dropdown">
                                        <select id="docente_name" name="docente_name"
                                                class="btn btn-secondary dropdown-toggle"
                                                value="{{ old('docente_name') }}">
                                            <option class="dropdown-item" selected>Seleccione...</option>
                                            @foreach($docent as $value)
                                                <option class="dropdown-item">{{$value->nombre_completo}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <hr/>
                                <h2>Grado asignado</h2>
                                <div class="form-group">
                                    <label for="grado_name">Grado:</label>
                                    <div class="dropdown">
                                        <select id="grado_name" name="grado_name"
                                                class="btn btn-secondary dropdown-toggle"
                                                value="{{ old('grado_name') }}">
                                            <option class="dropdown-item" selected>Seleccione...</option>
                                            @foreach($grade as $value)
                                                <option class="dropdown-item">{{$value->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <hr/>
                                <div class="text-center">
                                    <a href="{{ url('/subjects') }}" class="btn btn-danger btn-lg">Regresar</a>
                                    <button type="submit" class="btn btn-success btn-lg">Crear Asignatura</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                    @if ($subjects->isNotEmpty())
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre Asignatura</th>
                                <th scope="col">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subjects as $subject)
                                <tr>
                                    <th scope="row">{{ $subject->id }}</th>
                                    <td>{{ $subject->nombre_asignatura }}</td>
                                    <td>
                                        <form action="{{ route('subjects.destroy', $subject) }}"
                                              method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <a href="{{ route('subjects.show', $subject) }}"
                                               class="btn btn-link"><span
                                                    class="fa fa-eye"></span></a>
                                            <a href="{{ route('subjects.edit', $subject) }}"
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
