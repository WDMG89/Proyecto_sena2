<?php
    include('menu_superior.php');
    include('menu_lateral.php');
?>

<div class="height-100 bg-light container">
        <div class="row">
            <h2>Solicitudes</h2>
        </div>

        <div class="d-flex bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                <label for="inputPassword6" class="col-form-label">Mostrar</label>
            </div>
            <div class="p-2 bd-highlight">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Todas</option>
                    <option value="1">Radicados</option>
                    <option value="2">En proceso</option>
                    <option value="3">Autorizados</option>
                    <option value="3">Negados</option>
                    <option value="3">Pendientes</option>
                </select>
            </div>
            <div class="ms-auto p-2 bd-highlight">
                <a href="nuevasolicitud.php">
                    <button type="button" class="btn btn-info">Crear Solicitud</button>
                </a>
            </div>
        </div>

        <div class="row">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">No. Solicitud</th>
                        <th scope="col">Motivo</th>
                        <th scope="col">Fecha Solicitud</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Visualizar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>0001</td>
                        <td>Salud</td>
                        <td>06/08/2021</td>
                        <td>Radicado</td>
                        
                            <td>
                                <a href="verdoc.php">
                                    <button type="button" class="btn btn-secondary">Ver</button>
                                </a>
                            </td>

                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>0002</td>
                        <td>Calamidad</td>
                        <td>15/03/2022</td>
                        <td>Autorizado</td>
                        <td>
                            <button type="button" class="btn btn-secondary">Ver</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>0003</td>
                        <td>Otro</td>
                        <td>28/06/2022</td>
                        <td>En proceso</td>
                        <td>
                            <button type="button" class="btn btn-secondary">Ver</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


<?php 
    include('piedepagina.php');
?>