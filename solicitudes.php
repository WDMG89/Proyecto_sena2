<?php
session_start();
$id_empleado = $_SESSION['id'];
require_once('menu_superior.php');
require_once('menu_lateral.php');
require_once('conexiondb.php');




$stmt = $conn->prepare("SELECT solicitud.id, motivo_solicitud.nombre AS nombre_motivo, solicitud.fecha_inicio, estado.nombre AS nombre_estado FROM ((solicitud 
        INNER JOIN motivo_solicitud ON solicitud.id_motivo = motivo_solicitud.id) 
        INNER JOIN estado ON solicitud.id_estado = estado.id) WHERE solicitud.id_empleado = $id_empleado");
$stmt->execute();

$rows = $stmt->fetchAll(PDO::FETCH_OBJ);


$stmt2 = $conn->prepare("SELECT id AS id_estado, nombre AS nombre_estado2 FROM estado");
$stmt2->execute();

$rows2 = $stmt2->fetchAll(PDO::FETCH_OBJ);




?>
<br><br><br><br><br><br>
<div class="height-100 bg-light container">
    <div class="row">
        <h2>Solicitudes</h2>
    </div>

    <div class="d-flex bd-highlight mb-3">
        <div class="p-2 bd-highlight">
            <select class="form-select" aria-label="Default select example" name="mostrar">
                <?php foreach ($rows2 as $row2) { ?>
                    <option value="<?= $row2->id_estado ?>"><?= $row2->nombre_estado2 ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="p-2 bd-highlight">
            <a href="solicitudes.php?id=" mostrar" for="inputPassword6" class="btn btn-secondary">Mostrar</a>
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
                        <td><?= $row->id ?></td>
                        <td><?= $row->nombre_motivo ?></td>
                        <td><?= $row->fecha_inicio ?></td>
                        <td><?= $row->nombre_estado ?></td>

                        <td>
                            <a href="verdoc.php?id=<?= $row->id ?>" class="btn btn-secondary">Ver</a>
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