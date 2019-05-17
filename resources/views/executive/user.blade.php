<?php

/** User Actions **/
// Show the max users registers
$maxUsers = $connection->db_exec("value", UsersDAO::getMaxUser());


$section->appendInnerHTML('
      <div class="container">
        <div class="card card-profile shadow mt--300">
          <div class="px-4">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                                <a href="' . (!isset($_POST) ? getActualURL() : (URLWEB_FULL)) . '">
                      <img class="rounded-circle" src="' . AS_ASSETS . 'img/icons/Usuario.png">
                  </a>
                </div>
              </div>
              <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
              </div>
              <div class="col-lg-4 order-lg-1">
                <div class="card-profile-stats d-flex justify-content-center">
                  <div style="background:white">
                    <span class="heading">Bienvenido Director</span>
                    <span class="description">A SIMALILI</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-5">
              <h1>Usuario</h1>
              <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i></div>
            </div>
            <div class="mt-3 py-5 border-top text-center">
              <div class="row justify-content-center">
                <div class="col-lg-12">
                    <a class="btn btn-outline-default" href="../user-new">Nuevo Usuario</a>'
    . (($maxUsers >= 1) ? '
                    <a class="btn btn-outline-default" href="../user-modify">Modificar Usuario</a>
                    <a class="btn btn-outline-default" href="../user-search">Buscar Usuario</a>
                    <a class="btn btn-outline-default" href="../user-delete">Eliminar Usuario</a>
                    ' : '') . '
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>');