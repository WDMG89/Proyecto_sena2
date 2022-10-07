<?php
    require_once('menu_superior.php');
    require_once('menu_lateral.php');
?>

<!-- leyenda inicio-->
    <div class="height-100 bg-light container">
        <div class="row">
            <h2>Gestion Admin/Pendientes</h2>
        </div>
        
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
                        <td>Aprobado</td>
                        
                            <td>
                                <a href="pendientesGG.php">
                                    <button type="button" class="btn btn-secondary">Gestionar</button>
                                </a>
                            </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>0002</td>
                        <td>Calamidad</td>
                        <td>15/03/2022</td>
                        <td>Aprobado</td>
                        <td>
                            <button type="button" class="btn btn btn-secondary">Gestionar</button>
                        </td>
                    </tr>   
                    <tr>
                        <th scope="row">3</th>
                        <td>0003</td>
                        <td>Otro</td>
                        <td>28/06/2022</td>
                        <td>Aprobado</td>
                        <td>
                            <button type="button" class="btn btn btn-secondary">Gestionar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


<?php 
    include('piedepagina.php');
?>