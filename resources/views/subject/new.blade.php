<?php
/** Grade Actions **/
// Show grades registers
$gradeNames = self::getConnection()->db_exec("fetch_array", 'SELECT `nameGrade` FROM `grade`');
$names = "<option class=\"dropdown-item\" selected>Seleccione...</option>";
foreach ($gradeNames as $keys => $values) {
    $names .= '<option class="dropdown-item" >' . $values[0] . '</option>';
}

// Show Docents registers
$gradeNames = self::getConnection()->db_exec("fetch_array", DocentDAO::getNames());
$namesDocents = "<option class=\"dropdown-item\" selected>Seleccione...</option>";
foreach ($gradeNames as $keys => $values) {
    $namesDocents .= '<option class="dropdown-item" >' . $values[0] . '</option>';
}



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
                            <span class="heading">Gestion de:</span>
                            <span class="description">Asignatura</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <h1>Asignatura</h1>
                <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i></div>
            </div>
            <form action="' . getActualURL() . '" method="POST">
            <div class="mt-3 py-5 border-top text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                   
                        <table class="col-lg-12">
                            <thead>
                                <tr class="tableizer-firstrow">
                                    <th>CODIGO ASIGNATURA:</th>
                                    <th>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="codeSubject" name="codeSubject" placeholder="Ingresar codigo">
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>NOMBRE:</td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="nameSubject" name="nameSubject" placeholder="Ingresar nombre">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DOCENTE ASIGNADO:</td>
                                    <td>
                                        <div class="dropdown">
                                            <select id="idDocent" name="idDocent" class="btn btn-secondary dropdown-toggle">
                                                ' . $namesDocents . '
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>CURSO ASIGNADO:</td>
                                    <td>
                                        <div class="dropdown">
                                            <select id="idCourse" name="idCourse" class="btn btn-secondary dropdown-toggle">
                                                ' . $names . '
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <hr/>
                        <input type="submit" onclick="this.disabled=true;this.value=\'Sending, please wait...\';this.form.submit();" class="btn btn-success btn-lg" value="Guardar">
                                <a href="' . (!isset($_POST) ? getActualURL() : (URLWEB_FULL . $pathMain)) . '" class="btn btn-danger btn-lg">Cancelar</a>
                    </div>
                </div>
            </div></form>
        </div>
    </div>
</div>');