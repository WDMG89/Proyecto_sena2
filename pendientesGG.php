<br><br><br>
<?php
require_once('menu_superior.php');
require_once('menu_lateral.php');
require_once('conexiondb.php');

if (empty($_GET['id'])) {
} else {
    $id = $_GET['id'];

        $stmt = $conn->prepare("SELECT empleado.nombre AS nombre_empleado, area.nombre AS nombre_area, cargo.nombre AS nombre_cargo, solicitud.fecha_inicio, solicitud.fecha_final, solicitud.numero_horas, cargo.salario, motivo_solicitud.nombre AS nombre_motivo, solicitud.observaciones FROM ((((solicitud 
                            INNER JOIN motivo_solicitud ON solicitud.id_motivo = motivo_solicitud.id) 
                            INNER JOIN empleado ON solicitud.id_empleado = empleado.id)
                            INNER JOIN cargo ON empleado.id_cargo = cargo.id)
                            INNER JOIN area ON cargo.id_area = area.id) WHERE solicitud.id= $id");
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_OBJ);
    
}

$numero_horas = $row->numero_horas;
$salariomes = $row->salario;
$salariodia = $salariomes / 30;
$salariohora = $salariodia / 8;


$importe = $salariohora * $numero_horas;

?>


<div class="height-100 bg-light container">
    <div class="row">
        <h2>Gestionar Solicitud</h2>
    </div>


    <div class="row g-5">
        <div>
            <br>
            <h4 class="mb-3"><b>Solicitud Radicada</b></h4>
            <form class="needs-validation" novalidate>
                <div class="row g-3">
                    <div class="col-sm-12">
                        <label for="nombre" class="form-label">Nombre </label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?= $row->nombre_empleado ?>" required disabled>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <hr>
                    <div class="col-12">
                        <label for="area" class="form-label">Area o Dependencia</label>
                        <input type="text" class="form-control" id="area" name="area" placeholder="Area o Dependencia" value="<?= $row->nombre_area ?>" required disabled>
                    </div>

                    <div class="col-12">
                        <label for="cargo" class="form-label">Cargo</label>
                        <!--div class="input-group has-validation"-->
                        <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Cargo" value="<?= $row->nombre_cargo ?>" required disabled>
                        <!--div-->
                    </div>
                    <hr>
                    <div class="col-sm-6">
                        <label for="fecha_inicio" class="form-label">Fecha y Hora de salida</label>
                        <input id="fecha_inicio" class="form-control" type="datetime-local" name="fecha_inicio" value="<?= $row->fecha_inicio ?>" required disabled />
                    </div>
                    <div class="col-sm-6">
                        <label for="fecha_final" class="form-label">Fecha y Hora de Regreso</label>
                        <input id="fecha_final" class="form-control" type="datetime-local" name="fecha_final" value="<?= $row->fecha_final ?>" required disabled />
                    </div>

                    <div class="col-sm-3">
                        <label for="importe" class="form-label">Valor Importe Permiso</label>
                        <input type="number" class="form-control" id="importe" name="importe" value="<?= $importe ?>" required disabled>
                    </div>

                    <div class="col-md-6">
                        <label for="motivo" class="form-label">Motivo</label>
                        <select class="form-select" id="motivo" required disabled>
                            <option placeholder="">Salud</option>
                            <option>Salud</option>
                            <option>Particular</option>
                            <option>Calamidad</option>
                            <option>Otros</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                </div>
                <hr>
                <br class="my-4">
                <div class="row gy-6">
                    <div class="col-md-12">
                        <label for="observaciones" class="form-label">Observaciones <span class="text-muted">(Opcional)</span></label>
                        <textarea class="form-control" rows="2" id="observaciones" name="observaciones"><?= $row->observaciones ?></textarea>
                    </div>
            </form>
        </div>
    </div>
</div>
<hr>
<!-- boton autorizar -->
<div class="row g-">
    <button type="button" class="w-100 btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Autorizar solicitud
    </button>
</div>

<!-- Modal autorizar -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><b>Envio exitoso</b></h5>
                <a href="pendientesG.php">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </a>
            </div>
            <div class="modal-body">
                La solicitud se ha autorizado exitosamente
            </div>
            <div class="modal-footer">
                <a href="pendientesG.php">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </a>
            </div>
        </div>
    </div>
</div>
<br>

<!-- boton negar -->
<div class="row g-">
    <button type="button" class="w-100 btn btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop6">
        Negar solicitud
    </button>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><b>Envio exitoso</b></h5>
                <a href="pendientesG.php">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </a>
            </div>
            <div class="modal-body">
                La solicitud se ha negado exitosamente
            </div>
            <div class="modal-footer">
                <a href="pendientesG.php">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
<hr>

<?php
$conn = null;
require_once('piedepagina.php');
?>