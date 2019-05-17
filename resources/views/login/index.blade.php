@extends('layout')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card bg-secondary shadow border-0">
                <h2 class="text-center my-4">Bienvenido a SIMALILI</h2>
                <div class="card-body px-lg-5 py-lg-5">
                    <div class="row">
                        <div class="col">
                            <div class="text-center text-muted mb-4">
                                <img src="{{asset('img/logo/logo.png')}}" width="260">
                            </div>
                        </div>
                        <div class="col">
                            <form action="http://localhost/SignIn" method="POST">
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-circle-08"></i></span>
                                        </div>
                                        <input id="user" name="userAccess" class="form-control" placeholder="Usuario"
                                               type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input id="password" name="passAccess" class="form-control"
                                               placeholder="Contraseña"
                                               type="password">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input type="submit"
                                           onclick="this.disabled=true;this.value='Sending, please wait...';this.form.submit();"
                                           class="btn btn-success btn-lg" value="Iniciar Sesión">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <a href="#" class="text-light">
                        <small>Olvido la Contraseña?</small>
                    </a>
                </div>
                <div class="col-6 text-right">
                    <a href="signup" class="text-light">
                        <small>Crear una nueva Cuenta</small>
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
