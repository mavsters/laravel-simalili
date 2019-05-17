@extends('layout')
@section('content')
<div class="container pt-lg-md">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card bg-secondary shadow border-0">

                <h2 class="text-center my-4">Bienvenido a SIMALILI</h2>
                <div class="card-body px-lg-5 py-lg-5">
                    <div class="row">
                        <div class="col">
                            <div class="text-center text-muted mb-4">
                                <img src="' . AS_ASSETS . 'img/logo/logo.png" width="260">
                            </div>
                            <div class="text-center">
                                <a class="btn btn-darker my-2" href="signin-executive">Directivo</a>
                                <a class="btn btn-darker my-2" href="signin-secretary">Secretaría</a>
                            </div>
                        </div>
                        <div class="col">
                            <form method="POST" id="registro" action="" accept-charset="utf-8" class="form">
                                <div class="card-body">
                                    <div class="form-group focused">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-hashtag"></i>
                                                </div>
                                            </div>
                                            <input type="text" id="userID" name="userID" class="registro form-control" autocomplete="off" maxlength="20" placeholder="Ingresa documento de ID aquí...">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-user-alt"></i>
                                                </div>
                                            </div>
                                            <input type="text" id="userName" name="userName" placeholder="Ingresa su nombre aquí..." class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                            <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="userCargo" name="userCargo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Cargo
  </button>
  <div class="dropdown-menu" aria-labelledby="userCargo">
    <option class="dropdown-item">Directivo</a>
    <option class="dropdown-item">Secretaría</a>
  </div>
</div>
                                            <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="userState" name="userState" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Estado
  </button>
  <div class="dropdown-menu" aria-labelledby="userState">
    <option class="dropdown-item">Activo</a>
    <option class="dropdown-item">Inactivo</a>
  </div>
</div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-lock"></i>
                                                </div>
                                            </div>
                                            <input type="password" id="passRegistro" name="passRegistro" class="registro form-control" autocomplete="off" maxlength="60" placeholder="Repetir Contraseña">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-lock"></i>
                                                </div>
                                            </div>
                                            <input type="password" id="repeat_password" name="repeat_password" placeholder="Repite tú Contraseña aquí..." class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button type="submit" name="registro" class="btn btn-social btn-round btn-fill btn-github">¡Registrarse <span class="primary">Ahora</span>!</button>
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
                    <a href="#" class="text-light">
                                <small>Crear una nueva Cuenta</small>
                            </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
