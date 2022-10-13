
<br><br><br>
<?php
    require_once('menu_superior.php');
    require_once('menu_lateral.php');

    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "solicitudausencias";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $stmt = $conn->prepare("SELECT solicitud.id, motivo_solicitud.nombre AS nombre_motivo, solicitud.fecha_inicio, estado.nombre FROM ((solicitud INNER JOIN motivo_solicitud ON solicitud.id_motivo = motivo_solicitud.id) INNER JOIN estado ON solicitud.id_estado = estado.id) WHERE estado.nombre='RADICADO'");
        $stmt->execute();

        $rows = $stmt->fetchAll(PDO::FETCH_OBJ);


    } catch(PDOException $e) {
        echo "Conexion fallida: " . $e->getMessage();
    }

    

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
                        <th scope="col">No. Solicitud</th>
                        <th scope="col">Motivo</th>
                        <th scope="col">Fecha Solicitud</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Visualizar</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                        foreach($rows as $row) {
                    ?>
                        <tr>
                            <td><?=$row->id?></td>
                            <td><?=$row->nombre_motivo?></td>
                            <td><?=$row->fecha_inicio?></td>
                            <td><?=$row->nombre?></td>
                            
                            <td>
                                <a href="pendientesGG.php?id=<?=$row->id?>" class="btn btn-secondary">Gestionar</a>
                            </td>
                        </tr>
                    <?php   
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

<hr>
<?php

    $conn = null;
    include('piedepagina.php');
?>