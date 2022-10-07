<?php
    require_once('menu_superior.php');
    require_once('menu_lateral.php');
?>

<!-- leyenda inicio-->
    <div class="height-100 bg-light container">
        <div class="row">
            <h2> Parametrizacion </h2>
        </div>
<hr>
    <div class="d-flex bd-highlight mb-3">
        <div class="p-2 bd-highlight">
            <label for="inputPassword6" class="col-form-label">Area</label>
        </div>
            <div class="p-2 bd-highlight">
                <select class="form-select" aria-label="Default select example">
                    <option selected> --Todas-- </option>
                    <option value="1"> ADMINISTRATIVA </option>
                    <option value="2"> SERVICIO AL CLIENTE </option>
                    <option value="3"> COMERCIAL </option>
                    <option value="4"> OPERACIONES </option>
                    <option value="5"> TESORERIA </option>
                    <option value="5"> CONTABILIDAD </option>
                    <option value="5"> SISTEMAS </option>
                    <option value="5"> CARTERA </option>
                </select>
            </div>
        <div class="p-2 bd-highlight">
            <label for="inputPassword6" class="col-form-label">Cargo</label>
        </div>
            <div class="p-2 bd-highlight">
                <select class="form-select" aria-label="Default select example">
                    <option selected> --Todas-- </option>
                    <option value="1"> Supernumerario Operaciones </option>
                    <option value="2"> Analista Informacion </option>
                    <option value="3"> Supernumerario Administrativo/a </option>
                </select>
            </div>
    </div>
<hr>
        
        <div class="d-flex bd-highlight mb-3">
            <div class="p-2 bd-highlight">
            </div>
        </div>
        <!--visual tabla -->
        <div class="row">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> Nombre </th>
                        <th scope="col"> Usuario </th>                        
                        <th scope="col"> Area </th>
                        <th scope="col"> Cargo </th>
                        <th scope="col"> Parfil </th>
                        <th scope="col"> Grabar </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td> William Daniel Meneses Garcia </td>
                        <td> WDMENESES </td>
                        <td> Operaciones </td>
                        <td> Supernumerario Operativo </td>
                        <td>
                            <div class="#">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Empleado</option>
                                    <option value="1">Jefe directo</option>
                                    <option value="2">Administrativa/o</option>
                                </select>
                            </div>
                        </td>
                        <td>
                                <button type="button" class="btn btn-warning"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Guardar
                                </button>
                        </td>
                                <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel"><b> Modificacion exitosa </b></h5>
                                            <a href="#">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </a>
                                    </div>
                                        <div class="modal-body">
                                                Cambio de perfil exitoso
                                        </div>
                                    <div class="modal-footer">
                                        <a href="#">
                                            <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">
                                            Cerrar 
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>                                
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


<?php 
    include('piedepagina.php');
?>