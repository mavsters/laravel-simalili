@extends('layouts.layout')

@section('title', "Lista")

@section('content')
    <div class="container">
        <div class="card card-profile shadow" style="    margin-top: 150px;">
            <div class="px-4">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <img class="rounded-circle" src="{{asset('img/icons/Listas.png')}}">
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
                    <h1>Listas</h1>
                    <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i></div>
                </div>
                <div class="mt-3 py-5 border-top text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">

                            <a href="{{ url('/list/academic') }}" class="btn btn-success" type="button">Academico</a>
                            <a href="{{ url('/list/docent') }}" class="btn btn-success" type="button">Docente</a>
                            <a href="{{ url('/list/general') }}" class="btn btn-success" type="button">General</a>
                            <a href="{{ url('/list/grades') }}" class="btn btn-success" type="button">Grados</a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
