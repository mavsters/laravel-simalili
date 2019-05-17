<?php
$section->appendInnerHTML('
        <div class="container">
            <div class="card card-profile shadow mt--300">
                <div class="px-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="' . (!isset($_POST) ? getActualURL() : (URLWEB_FULL)) . '">
                                    <img class="rounded-circle" src="' . AS_ASSETS . 'img/icons/Asignatura.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                        </div>
                        <div class="col-lg-4 order-lg-1">
                            <div class="card-profile-stats d-flex justify-content-center">
                                <div style="background:white">
                    <span class="heading">Busqueda de:</span>
                                    <span class="description">Asignatura</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <h1>Asignatura</h1>
                        <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i></div>
                    </div>
                    <div class="mt-3 py-5 border-top text-center">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <table class="col-lg-12">
                                    <tbody>
                                    <tr class="tableizer-firstrow">
                                        <th>CODIGO ASIGNATURA:</th>
                                        <th>
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true"
                                                        class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                        id="dropdownMenuButton2" type="button">
                                                    Seleccione
                                                </button>
                                                <div aria-labelledby="dropdownMenuButton2" class="dropdown-menu">
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>NOMBRE:</td>
                                        <td>
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true"
                                                        class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                        id="dropdownMenuButton3" type="button">
                                                    Seleccione
                                                </button>
                                                <div aria-labelledby="dropdownMenuButton3" class="dropdown-menu">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>CURSO ASIGNADO:</td>
                                        <td>
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true"
                                                        class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                        id="dropdownMenuButton" type="button">
                                                    Seleccione
                                                </button>
                                                <div aria-labelledby="dropdownMenuButton" class="dropdown-menu">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>DOCENTE ASIGNADO:</td>
                                        <td>
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true"
                                                        class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                        id="dropdownMenuButton1" type="button">
                                                    Seleccione
                                                </button>
                                                <div aria-labelledby="dropdownMenuButton1" class="dropdown-menu">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <hr/>
                                <button class="btn btn-secondary btn-lg" type="button">Buscar</button>
                                <a href="' . (!isset($_POST) ? getActualURL() : (URLWEB_FULL . $pathMain)) . '" class="btn btn-danger btn-lg">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>');