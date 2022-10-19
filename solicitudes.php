<br><br><br>
<?php
    require_once('menu_superior.php');
    require_once('menu_lateral.php');
    require_once('conexiondb.php');

    if (!isset($_GET['filtro'])) {
        $stmt = $conn-> prepare("SELECT solicitud.id, motivo_solicitud.nombre AS nombre_motivo, solicitud.fecha_inicio, estado.nombre AS nombre_estado FROM usuarios");
    }  else {
        $filtro = $_GET['filtro'];
        $stmt = $conn-> prepare("SELECT solicitud.id, motivo_solicitud.nombre AS nombre_motivo, solicitud.fecha_inicio, estado.nombre AS nombre_estado FROM usuarios WHERE Mostrar = $filtro");
    }


?>


<?php
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
                <form action="" method="get">
                <label for="inputPassword6" class="col-form-label">Mostrar</label>
            </div>

            <div class="p-2 bd-highlight">
                <select name='filtro'>
                    <option value="Radicados">Radicados</option>
                    <option value="En proceso">En proceso</option>
                    <option value="Autorizados">Autorizados</option>
                    <option value="Negados">Negados</option>
                    <option value="Pendientes">Pendientes</option>
                </select>
                <button type="submit">Filtrar</button>
            </div>
        </form>


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