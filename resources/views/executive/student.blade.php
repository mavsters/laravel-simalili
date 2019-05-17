<?php
$section->appendInnerHTML('<div class="container">
        <div class="card card-profile shadow mt--300">
          <div class="px-4">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                                <a href="' . (!isset($_POST) ? getActualURL() : (URLWEB_FULL)) . '">
                      <img class="rounded-circle" src="' . AS_ASSETS . 'img/icons/Estudiantes.png"
                           style="border-radius: 20% !important; max-width: 300px !important;">
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
              <h1>Estudiante</h1>
              <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i></div>
            </div>
            <div class="mt-3 py-5 border-top text-center">
              <div class="row justify-content-center">
                <div class="col-lg-12">
                  <a class="btn btn-outline-default" href="../user-modify">Modificar Estudiante</a>
                  <a class="btn btn-outline-default" href="../user-delete">Eliminar Estudiante</a>
                  <a class="btn btn-outline-default" href="../user-search">Buscar Estudiante</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>');