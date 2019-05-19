<?php
/** User Actions **/

// Constant
$idMain = 'idMain';
$date = 'm/d/Y';
// Variable
$getData = null;
$names = "<option class=\"dropdown-item\" selected>Seleccione...</option>";
$data = '';

// Actions
$options = self::getConnection()->db_exec("fetch_array", UsersDAO::getNameUsers());
if (isset($_POST) && !empty($_POST)) {
    // Data SQL
    $getData = self::getConnection()->db_exec("fetch_array", UsersDAO::getUser($_POST[$idMain]))[0];
    $names = '<option class="dropdown-item" >' . $_POST[$idMain] . '</option>';

    // Modify Data

    $initDate = date($date, strtotime($getData['initDate']));
    $endDate = date($date, strtotime($getData['endDate']));
    $birthday = date($date, strtotime($getData['birthday']));
}

foreach ($options as $keys => $values) {
    $names .= '<option class="dropdown-item" >' . $values[0] . '</option>';
}

// Start VIew
$data = '<tr>
            <th>CIBERUSUARIO:</th>
            <td>
                <div class="dropdown">
                <select id="' . $idMain . '" name="' . $idMain . '" class="btn btn-secondary dropdown-toggle" onchange="this.form.submit()">
                         ' . $names . '
                </select>
                </div>
            </td>
        </tr>';

// Submit Values
if (isset($_POST) && !empty($_POST)) {
    $data = '
        <tr>
            <td>CIBERUSUARIO:</td>
            <td>
                <div class="form-group">
                    <input type="hidden"  id="ciberusuario" name="ciberusuario" value="' . $getData['user'] . '"/>
                    <input type="text" class="form-control" disabled value="' . $getData['user'] . '"
                           placeholder="Ingrese el Ciberusuario">
                </div>
            </td>
        </tr>
        <tr>
            <td>NOMBRES:</td>
            <td>
                <div class="form-group">
                    <input class="form-control" name="name" id="name" placeholder="Ingrese los Nombres" value="' . $getData['firstName'] . '" disabled
                           type="text">
                </div>
            </td>
        </tr>
        <tr>
            <td>APELLIDOS:</td>
            <td>
                <div class="form-group">
                    <input type="text" class="form-control" id="lastName" name="lastName" value="' . $getData['lastName'] . '" disabled
                           placeholder="Ingrese los Apellidos">
                </div>
            </td>
        </tr>
        <tr>
            <td>TIPO DE IDENTIFICACIÓN:</td>
            <td>
                <div class="dropdown">
                  <select id="typeID" name="typeID" class="btn btn-secondary dropdown-toggle" disabled>
                  <option class="dropdown-item" selected >' . $getData['TypeDocument'] . '</option>
                        
                  </select>
                </div>
            </td>
        </tr>
        <tr>
            <td>NÚMERO DE IDENTIFICACIÓN:</td>
            <td>
                <div class="form-group">
                    <input type="text" class="form-control" id="numberID" name="numberID" value="' . $getData['NumberDocument'] . '" disabled
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
                        <input id="birthday" name="birthday" class="form-control datepicker" placeholder="Select date" disabled
                               type="text" value="' . $birthday . '">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>RH:</td>
            <td>
                <div class="dropdown">
                  <select id="rh" name="rh" class="btn btn-secondary dropdown-toggle" disabled>
                        <option class="dropdown-item" selected>' . $getData['rh'] . '</option>
                  </select>
                </div>
            </td>
        </tr>
        <tr>
            <td>EPS:</td>
            <td>
                <div class="form-group">
                    <input type="text" class="form-control" id="eps" name="eps" value="' . $getData['eps'] . '" disabled
                           placeholder="Ingrese su EPS">
                </div>
            </td>
        </tr>
        <tr>
            <td>Religión:</td>
            <td>
                <div class="form-group">
                    <input type="text" class="form-control" id="religion" name="religion" value="' . $getData['religion'] . '" disabled
                           placeholder="Ingrese su Religión">
                </div>
            </td>
        </tr>
        <tr>
            <td>NÚMERO DE CELULAR:</td>
            <td>
                <div class="form-group">
                    <input type="text" class="form-control" id="numberPhone" name="numberPhone" value="' . $getData['phone'] . '" disabled
                           placeholder="Ingrese el Número de Celular">
                </div>
            </td>
        </tr>
        <tr>
            <td>CARGO:</td>
            <td>
                <div class="dropdown">
                <select id="position" name="position" class="btn btn-secondary dropdown-toggle" disabled>
                    <option class="dropdown-item" selected>' . $getData['charge'] . '</option>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td>FECHA DE INICIO:</td>
            <td>
                <div class="form-group">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i
                                    class="ni ni-calendar-grid-58"></i></span>
                        </div>
                        <input id="initDate" name="initDate" class="form-control datepicker" placeholder="Select date" disabled
                               type="text" value="' . $initDate . '">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>FECHA DE FIN:</td>
            <td>
                <div class="form-group">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i
                                    class="ni ni-calendar-grid-58"></i></span>
                        </div>
                        <input id="endDate" name="endDate" class="form-control datepicker" placeholder="Select date" disabled
                               type="text" value="' . $endDate . '">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>¿Habilitado?:</td>
            <td>
                <div class="custom-control custom-checkbox mb-3">
                  <input class="custom-control-input" id="checkEnable" ' . ($getData['enable'] ? 'checked' : '') . ' name="checkEnable" type="checkbox" disabled>
                  <label class="custom-control-label" for="checkEnable">
                    <span>¿Habilitado?</span>
                  </label>
                </div> 
            </td>
        </tr>
        <tr>
            <td>CONTRASEÑA:</td>
            <td>
                <div class="form-group">
                    <input type="text" class="form-control" id="password" name="password" disabled
                           placeholder="Ingrese la Contraseña"  value="' . $getData['password'] . '">
                </div>
            </td>
        </tr> ';

}


// Add Form
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
                    <span class="heading">Busqueda de:</span>
                                    <span class="description">Usuario</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <h1>Usuario</h1>
                        <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i></div>
                    </div>
                    <form action="' . getActualURL() . '" method="POST">
                    <div class="mt-3 py-5 border-top text-center">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <table class="col-lg-12">
                                    <tbody>
                                    ' . $data . '
                                    </tbody>
                                </table>
                                <hr/>
                                <input type="button" onclick="this.disabled=true;this.value=\'Sending, please wait...\';this.form.submit();" class="btn warning btn-lg" value="Eliminar">
                                <a href="' . (!isset($_POST) ? getActualURL() : (URLWEB_FULL . $pathMain)) . '" class="btn btn-danger btn-lg">Cancelar</a>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>');
