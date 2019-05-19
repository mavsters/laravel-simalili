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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <h1>Usuario</h1>
                        <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i></div>
                    </div>
                    <form method="POST" action="{{ url('users') }}">
                    <div class="mt-3 py-5 border-top text-center">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                @if ($users->isNotEmpty())
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Correo</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <th scope="row">{{ $user->id }}</th>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
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
                                <hr/>
                                <a href="{{ url('/users') }}" class="btn btn-danger btn-lg">Regresar al listado de
                                    usuarios</a>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
