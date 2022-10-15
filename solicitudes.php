<br><br><br>
<?php
    require_once('menu_superior.php');
    require_once('menu_lateral.php');
    require_once('conexiondb.php');




        $stmt = $conn->prepare("SELECT solicitud.id, motivo_solicitud.nombre AS nombre_motivo, solicitud.fecha_inicio, estado.nombre AS nombre_estado FROM ((solicitud 
        INNER JOIN motivo_solicitud ON solicitud.id_motivo = motivo_solicitud.id) 
        INNER JOIN estado ON solicitud.id_estado = estado.id)");
        $stmt->execute();

        $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
        

    

?>
<br><br><br>
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
                        <th scope="col">No. Solicitud</th>
                        <th scope="col">Motivo</th>
                        <th scope="col">Fecha Solicitud</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Visualizar</th>
                    </tr>
                </thead>
                <tbody>


                <?php
                    foreach ($rows as $row) {
                
                ?>

                    <tr>
                        <td><?=$row->id?></td>
                        <td><?=$row->nombre_motivo?></td>
                        <td><?=$row->fecha_inicio?></td>
                        <td><?=$row->nombre_estado?></td>
                        
                            <td>
                                <a href="verdoc.php">
                                    <button type="button" class="btn btn-secondary">Ver</button>
                                </a>
                            </td>
                    </tr>
                <?php
                    }
                ?>
                        
                </tbody>
            </table>
        </div>
    </div>


<?php
    $conn = null;
    include('piedepagina.php');
?>