<?php
$options = self::getConnection()->db_exec("fetch_array", 'SELECT `nameRelationship` FROM `relationship` ');
$names = "<option class=\"dropdown-item\" selected>Seleccione...</option>";
foreach ($options as $keys => $values) {
    $names .= '<option class="dropdown-item" >' . $values['nameRelationship'] . '</option>';
}

$gradeNames = self::getConnection()->db_exec("fetch_array", 'SELECT `nameCourse` FROM `course`');
$namesG = "<option class=\"dropdown-item\" selected>Seleccione...</option>";
foreach ($gradeNames as $keys => $values) {
    $namesG .= '<option class="dropdown-item" >' . $values[0] . '</option>';
}


$section->appendInnerHTML('
        <div class="container">
            <div class="card card-profile shadow mt--300">
                <div class="px-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="' . (!isset($_POST) ? getActualURL() : (URLWEB_FULL)) . '">
                                    <img class="rounded-circle" src="'.AS_ASSETS.'img/icons/Matricula.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                        </div>
                        <div class="col-lg-4 order-lg-1">
                            <div class="card-profile-stats d-flex justify-content-center">
                                <div style="background:white">
                    <span class="heading">Gestion de:</span>
                                    <span class="description">Matrícula</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <h1>Matrícula</h1>
                        <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i></div>
                    </div>
                    <form action="' . getActualURL() . '" method="POST">
                        <div class="mt-3 py-5 border-top text-center">
                            <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                     <div class="nav-wrapper">
    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Matricula</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Estudiante</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>Acudiente</a>
        </li>
    </ul>
</div>
<div class="card shadow">
    <div class="card-body">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
 <table class="col-lg-12">
                                            <tbody><tr>
                                    <td>Tipo de matricula:</td>
                                    <td>
                                        <div class="dropdown">
                                            <select id="typeEnrollment" name="typeEnrollment" class="btn btn-secondary dropdown-toggle">
                                                <option class="dropdown-item" selected>Seleccione...</option>
                                                            <option class="dropdown-item" >Nueva</option>
                                                            <option class="dropdown-item" >Antigua</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>          
                                  </tbody>
                                  </table></div>
            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                <table class="col-lg-12">
                                            <tbody>
                                            <tr>
                                                <td>NOMBRES:</td>
                                                <td>
                                                    <div class="form-group">
                                                        <input class="form-control" name="name" id="name" placeholder="Ingrese los Nombres"
                                                               type="text">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>APELLIDOS:</td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="lastName" name="lastName"
                                                               placeholder="Ingrese los Apellidos">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>TIPO DE IDENTIFICACIÓN:</td>
                                                <td>
                                                    <div class="dropdown">
                                                      <select id="typeID" name="typeID" class="btn btn-secondary dropdown-toggle">
                                                            <option class="dropdown-item" selected>Seleccione...</option>
                                                            <option class="dropdown-item" >Cedula de Ciudadania</option>
                                                            <option class="dropdown-item" >Pasaporte</option>
                                                            <option class="dropdown-item" >Cedula Extranjera</option>
                                                            
                                                      </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>NÚMERO DE IDENTIFICACIÓN:</td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="numberID" name="numberID"
                                                               placeholder="Ingrese el Número de Identificación">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>FECHA DE NACIMIENTO:</td>
                                                <td>
                                                    <div class="form-group">
                                                        <div class="input-group input-group-alternative">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="ni ni-calendar-grid-58"></i></span>
                                                            </div>
                                                            <input id="birthday" name="birthday" class="form-control datepicker" placeholder="Select date"
                                                                   type="text" value="' . date('m/d/Y') . '">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>RH:</td>
                                                <td>
                                                    <div class="dropdown">
                                                      <select id="rh" name="rh" class="btn btn-secondary dropdown-toggle">
                                                            <option class="dropdown-item" selected>Seleccione...</option>
                                                            <option class="dropdown-item" >O+</option>
                                                            <option class="dropdown-item" >O-</option>
                                                            <option class="dropdown-item" >AB+</option>
                                                            <option class="dropdown-item" >AB-</option>
                                                            <option class="dropdown-item" >A+</option>
                                                            <option class="dropdown-item" >A-</option>
                                                            <option class="dropdown-item" >B+</option>
                                                            <option class="dropdown-item" >B-</option>
                                                      </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>EPS:</td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="eps" name="eps"
                                                               placeholder="Ingrese su EPS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Religión:</td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="religion" name="religion"
                                                               placeholder="Ingrese su Religión">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>NÚMERO DE CELULAR:</td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="numberPhone" name="numberPhone"
                                                               placeholder="Ingrese el Número de Celular">
                                                    </div>
                                                </td>
                                            </tr>
 <tr>
                                                <td>Código de Estudiante:</td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="codeStudent" name="codeStudent"
                                                               placeholder="Ingrese el Número de Celular">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Lugar de Nacimiento:</td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="placebirth" name="placebirth"
                                                               placeholder="Ingrese el Número de Celular">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tipo de estudiante:</td>
                                                <td>
                                                    <div class="dropdown">
                                                      <select id="typeStudent" name="typeStudent" class="btn btn-secondary dropdown-toggle">
                                                            <option class="dropdown-item" selected>Seleccione...</option>
                                                            <option class="dropdown-item" >Normal</option>
                                                            <option class="dropdown-item" >Especial</option>
                                                      </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Curso:</td>
                                                <td>
                                                    <div class="dropdown">
                                                      <select id="nameCourse" name="nameCourse" class="btn btn-secondary dropdown-toggle">
                                                            ' . $namesG . '
                                                      </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                            </table>
            </div>
            <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                <table class="col-lg-12">
                                            <tbody>
                                            <tr>
                                                <td>NOMBRES:</td>
                                                <td>
                                                    <div class="form-group">
                                                        <input class="form-control" name="nameParent" id="nameParent" placeholder="Ingrese los Nombres"
                                                               type="text">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>APELLIDOS:</td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="lastNameParent" name="lastNameParent"
                                                               placeholder="Ingrese los Apellidos">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>TIPO DE IDENTIFICACIÓN:</td>
                                                <td>
                                                    <div class="dropdown">
                                                      <select id="typeIDParent" name="typeIDParent" class="btn btn-secondary dropdown-toggle">
                                                            <option class="dropdown-item" selected>Seleccione...</option>
                                                            <option class="dropdown-item" >Cedula de Ciudadania</option>
                                                            <option class="dropdown-item" >Pasaporte</option>
                                                            <option class="dropdown-item" >Cedula Extranjera</option>
                                                            
                                                      </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>NÚMERO DE IDENTIFICACIÓN:</td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="numberIDParent" name="numberIDParent"
                                                               placeholder="Ingrese el Número de Identificación">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>FECHA DE NACIMIENTO:</td>
                                                <td>
                                                    <div class="form-group">
                                                        <div class="input-group input-group-alternative">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="ni ni-calendar-grid-58"></i></span>
                                                            </div>
                                                            <input id="birthdayParent" name="birthdayParent" class="form-control datepicker" placeholder="Select date"
                                                                   type="text" value="' . date('m/d/Y') . '">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>RH:</td>
                                                <td>
                                                    <div class="dropdown">
                                                      <select id="rhParent" name="rhParent" class="btn btn-secondary dropdown-toggle">
                                                            <option class="dropdown-item" selected>Seleccione...</option>
                                                            <option class="dropdown-item" >O+</option>
                                                            <option class="dropdown-item" >O-</option>
                                                            <option class="dropdown-item" >AB+</option>
                                                            <option class="dropdown-item" >AB-</option>
                                                            <option class="dropdown-item" >A+</option>
                                                            <option class="dropdown-item" >A-</option>
                                                            <option class="dropdown-item" >B+</option>
                                                            <option class="dropdown-item" >B-</option>
                                                      </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>EPS:</td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="epsParent" name="epsParent"
                                                               placeholder="Ingrese su EPS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Religión:</td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="religionParent" name="religionParent"
                                                               placeholder="Ingrese su Religión">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>NÚMERO DE CELULAR:</td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="numberPhoneParent" name="numberPhoneParent"
                                                               placeholder="Ingrese el Número de Celular">
                                                    </div>
                                                </td>
                                            </tr>
                                             <tr>
                                                <td>Parentezco:</td>
                                                <td>
                                                    <div class="dropdown">
                                                      <select id="parentezco" name="parentezco" class="btn btn-secondary dropdown-toggle">
                                                            ' . $names . '                 
                                                            </select>
                                                            </div>
                                                            </td>
                                                            </tr>
                                            </tbody>
                                            </table>
            </div>
        </div>
    </div>
</div> 
                                <hr/>
                                <input type="submit" onclick="this.disabled=true;this.value=\'Sending, please wait...\';this.form.submit();" class="btn btn-success btn-lg" value="Guardar">
                                <a href="' . (!isset($_POST) ? getActualURL() : (URLWEB_FULL . $pathMain)) . '" class="btn btn-danger btn-lg">Cancelar</a>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>');