<?php
$options = self::getConnection()->db_exec("fetch_array", DocentDAO::getNames());
$names = "";
foreach ($options as $keys => $values) {
    $tempValue = $values['NumberDocument'];
    if (isset($tempValue) && !empty($tempValue)) {
        $names .= '<option class="dropdown-item" >' . $tempValue . '</option>';
    }
}


$section->appendInnerHTML('<div class="container">
            <div class="card card-profile shadow mt--300">
                <div class="px-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="' . (!isset($_POST) ? getActualURL() : (URLWEB_FULL)) . '">
                                    <img class="rounded-circle" src="' . AS_ASSETS . 'img/icons/Grado.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                        </div>
                        <div class="col-lg-4 order-lg-1">
                            <div class="card-profile-stats d-flex justify-content-center">
                                <div style="background:white">
                    <span class="heading">Gestion de:</span>
                                    <span class="description">Grado</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <h1>Grado</h1>
                        <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i></div>
                    </div>
                                        <form action="' . getActualURL() . '" method="POST">

                    <div class="mt-3 py-5 border-top text-center">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                
                                <div class="nav-wrapper">
    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>1) Grado</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>2) Asignación</a>
        </li>
    </ul>
</div>
<div class="">
    <div class="">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                <p class="description">Digite el nombre del grado y a su vez, la cantidad de cursos que tiene dicho grado..</p>
                <table class="col-lg-12">
                                        <tbody><tr class="tableizer-firstrow"><td>Nombre del Grado:</td><td><div class="form-group">
                                            <input type="text" class="form-control" id="idGrade" name="idGrade" placeholder="Digite el nombre">
                                        </div></td></tr>
                                        <tr class="tableizer-firstrow">
                                        <td>Cantidad de Cursos:</td>
                                        <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="numberCourses" name="numberCourses" placeholder="Digite el número de cursos posibles">
                                        </div>
                                        </td></tr>
                                        </tbody>
                                </table>
            </div>
            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                <p class="description">Selecione un curso y un Docente encargado de dicho curso.</p>
                <table class="col-lg-12">
                                        <tbody><tr class="tableizer-firstrow"><td>Seleccionar Curso:</td><td>
                                        <div class="dropdown">
                                                      <select id="selectCourse" name="selectCourse" class="btn btn-secondary dropdown-toggle">
                                                            <option class="dropdown-item" selected>Seleccione...</option>
                                                            </select>
                                                            </div>
                                        </td></tr>
                                        <tr class="tableizer-firstrow">
                                        <td>Seleccionar Docente encargado (ID):</td>
                                        <td>
                                        <div class="dropdown">
                                                      <select id="selectDocent" name="selectDocent" class="btn btn-secondary dropdown-toggle">
                                                            <option class="dropdown-item" selected>Seleccione...</option>
                                                            ' . $names . '
                                                            </select>
                                                            </div>
                                        </td></tr>
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


$body->appendInnerHTML('
<script>
$(document).ready(function() {
    $("#tabs-icons-text-2-tab").click(function(){
        var nameGrade = $("#idGrade").val();
        var count = parseInt($("#numberCourses").val());
        if(nameGrade !=  \'\' && count > 0){
            var tempValues = "<option class=\'dropdown-item\' selected>Seleccione...</option>";
            for (var i = 0; i <= count; i++){
                tempValues += "<option class=\'dropdown-item\' >"+(nameGrade+i)+"</option>";
            } 
            $("#selectCourse").html(tempValues);
        }else{
            alert("Añada datos primero");
        }
    }); 
});
</script>
');