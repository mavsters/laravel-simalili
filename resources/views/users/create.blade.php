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
                <form method="POST" action="{{ url('users/new') }}">
                    <div class="mt-3 py-5 border-top text-left">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">

                                {{ csrf_field() }}
                                <h2>Docente:</h2>
                                <div class="form-group">
                                    <label for="docente">Docente:</label>
                                    <div class="dropdown">
                                        <select id="docente" name="docente"
                                                class="btn btn-secondary dropdown-toggle"
                                                value="{{ old('docente') }}">
                                            <option class="dropdown-item" selected>Seleccione...</option>
                                            @foreach($docente as $values)
                                                <option class="dropdown-item">{{$values->nombre_completo}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <hr/>

                                <h2>usuario:</h2>
                                <div class="form-group">
                                    <label for="tipo_usiaro">Tipo de Usuario:</label>
                                    <div class="dropdown">
                                        <select id="tipo_usiaro" name="tipo_usiaro"
                                                class="btn btn-secondary dropdown-toggle"
                                                value="{{ old('tipo_usiaro') }}">
                                            <option class="dropdown-item" selected>Seleccione...</option>
                                            <option class="dropdown-item">Directivo</option>
                                            <option class="dropdown-item">Secretaría</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="username">Usuario:</label>
                                    <input type="text" class="form-control" name="username" id="username"
                                           autocomplete="on"

                                           value="{{ old('username') }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo electrónico:</label>
                                    <input type="email" class="form-control" name="email" id="email" autocomplete="on"

                                           value="{{ old('email') }}">
                                </div>

                                <div class="form-group">
                                    <label for="password">Contraseña:</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                    >
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
                    <hr/>
                    @if ($users->isNotEmpty())
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Tipo Usuario</th>
                                <th scope="col">Acciones</th>
                            </tr>
                            </thead>

                            <tbody>
                            {{$count = 1}}
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{ $count++ }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ ($user->id_tipousuario == 1)?'Directivo':(($user->id_tipousuario == 2)?'Secretaría':'Normal') }}</td>

                                    <td>
                                        <form action="{{ route('users.destroy', $user) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <a href="{{ route('users.show', $user) }}" class="btn btn-link"><span
                                                    class="fa fa-eye"></span></a>
                                            <a href="{{ route('users.edit', $user) }}" class="btn btn-link"><span
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
