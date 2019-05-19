@extends('layouts.layout')
@section('content')
        <div class="card card-profile shadow mt--300">
          <div class="px-4">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                    <a href="{{url('/')}}">
                        <img class="rounded-circle" src="{{asset('img/icons/Usuario.png')}}">
                  </a>
                </div>
              </div>
              <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
              </div>
            </div>
              <div class="text-center mt-4">
              <h1>Usuario</h1>
              <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i></div>
            </div>
            <div class="mt-3 py-5 border-top text-center">
              <div class="row justify-content-center">
                <div class="col-lg-12">
                    <a class="btn btn-outline-default" href="{{url('/users/new')}}">Nuevo Usuario</a>
                    <a class="btn btn-outline-default" href="{{url('/users/search')}}">Buscar Usuario</a>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
