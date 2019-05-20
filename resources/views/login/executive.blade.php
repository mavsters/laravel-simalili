@extends('layouts.layout')
@section('content')
<div class="row justify-content-center mt--300">
    <div class="col-lg-12">
        <div class="row row-grid">
            <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                    <div class="card-body py-5" style="margin-left:30%">
                        <div class="icon icon-shape icon-shape-primary rounded-circle m-4">
                            <img height="100" src="{{asset('img/icons/Usuario.png')}}">
                        </div>
                        <a class="btn btn-default mt-3" href="{{url('/users')}}"
                           style="right: 11px;">Usuario</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                    <div class="card-body py-5" style="margin-left:30%">
                        <div class="icon icon-shape icon-shape-warning rounded-circle m-4">
                            <img height="100" src="{{asset('img/icons/Matricula.png')}}">
                        </div>
                        <a class="btn btn-warning mt-3" href="{{url('/enrollment')}}"
                           style="right: 11px;">Matrícula</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                    <div class="card-body py-5" style="margin-left:30%">
                        <div class="icon icon-shape icon-shape-info rounded-circle m-4">
                            <img height="100" src="{{asset('img/icons/Grado.png')}}">
                        </div>
                        <a class="btn btn-info mt-4" href="{{url('grades')}}"
                           style="right: 5px;">Grado</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br/>
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="row row-grid">
            <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                    <div class="card-body py-5" style="margin-left:30%">
                        <div class="icon icon-shape icon-shape-success rounded-circle m-4">
                            <img height="100" src="{{asset('img/icons/Asignatura.png')}}">
                        </div>
                        <a class="btn btn-success mt-3" href="{{url('/subjects')}}"
                           style="right: 11px;">Asignatura</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                    <div class="card-body py-5" style="margin-left:30%">
                        <div class="icon icon-shape icon-shape-primary rounded-circle m-4">
                            <img height="100" src="{{asset('img/icons/Docente.png')}}">
                        </div>
                        <a class="btn btn-primary mt-3" href="{{url('/docent')}}"
                           style="right: 11px;">Docente</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                    <div class="card-body py-5" style="margin-left:30%">
                        <div class="icon icon-shape icon-shape-secondary rounded-circle m-4">
                            <img height="100" src="{{asset('img/icons/Listas.png')}}">
                        </div>
                        <a class="btn btn-secondary mt-4" href="{{url('/lists')}}"
                           style="right: 5px;">Lista</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
