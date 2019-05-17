@extends('layout')
@section('content')
        <div class="container">
            <div class="row justify-content-center mt--300">
                <div class="col-lg-12">
                    <div class="row row-grid">
                        <div class="col-lg-4">
                            <div class="card card-lift--hover shadow border-0">
                                <div class="card-body py-5" style="margin-left:30%">
                                    <div class="icon icon-shape icon-shape-primary rounded-circle m-4">
                                        <img height="100" src="' . AS_ASSETS . 'img/icons/Matricula.png">
                                    </div>
                                    <h6 class="text-primary text-uppercase">Matrícula</h6>
                                    <a class="btn btn-primary mt-3" href="../secretary-enrollment"
                                       style="right: 11px;">Ingresar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-lift--hover shadow border-0">
                                <div class="card-body py-5" style="margin-left:30%">
                                    <div class="icon icon-shape icon-shape-success rounded-circle m-4">
                                        <img height="100" src="' . AS_ASSETS . 'img/icons/Estudiantes.png">
                                    </div>
                                    <h6 class="text-success text-uppercase">Estudiante</h6>
                                    <a class="btn btn-success mt-3" href="../executive-secretary-student"
                                       style="right: 11px;">Ingresar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-lift--hover shadow border-0">
                                <div class="card-body py-5" style="margin-left:30%">
                                    <div class="icon icon-shape icon-shape-warning rounded-circle m-4">
                                        <img height="100" src="' . AS_ASSETS . 'img/icons/Listas.png">
                                    </div>
                                    <h6 class="text-warning text-uppercase" style="margin-left:15%">Lista</h6>
                                    <a class="btn btn-warning mt-4" href="../secretary-list"
                                       style="right: 5px;">Ingresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
