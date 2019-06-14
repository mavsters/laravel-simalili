@extends('layouts.layout')
@section('content')
            <div class="row justify-content-center mt--300">
                <div class="col-lg-12">
                    <div class="row row-grid">
                        <div class="col-lg-4">
                            <div class="card card-lift--hover shadow border-0">
                                <div class="card-body py-5" style="margin-left:30%">
                                    <div class="icon icon-shape icon-shape-primary rounded-circle m-4">
                                        <img height="100" src="{{asset('img/icons/Matricula.png')}}">
                                    </div>
                                    <br/>
                                    <a class="btn btn-primary mt-3" href="{{ url('/enrollments') }}"
                                       style="right: 11px;">Matrícula</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-lift--hover shadow border-0">
                                <div class="card-body py-5" style="margin-left:30%">
                                    <div class="icon icon-shape icon-shape-success rounded-circle m-4">
                                        <img height="100" src="{{asset('img/icons/Estudiantes.png')}}">
                                    </div>
                                    <br/>
                                    <a class="btn btn-success mt-3" href="{{ url('/students') }}"
                                       style="right: 11px;">Estudiante</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-lift--hover shadow border-0">
                                <div class="card-body py-5" style="margin-left:30%">
                                    <div class="icon icon-shape icon-shape-warning rounded-circle m-4">
                                        <img height="100" src="{{asset('img/icons/Listas.png')}}">
                                    </div>
                                    <br/>
                                    <a class="btn btn-outline-warning mt-4" href="{{ url('/lists') }}"
                                       style="right: 5px;">Listas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endsection
