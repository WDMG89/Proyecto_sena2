<?php
session_start();
    require_once('menu_superior.php');
    require_once('menu_lateral.php');
    require_once('conexiondb.php');
    if (empty($_GET['id'])) {
    } else {
        $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT empleado.nombre AS nombre_empleado, area.nombre AS nombre_area, cargo.nombre AS nombre_cargo, 
        solicitud.fecha_inicio, solicitud.fecha_final, motivo_solicitud.id AS id_motivo, motivo_solicitud.nombre AS nombre_motivo, solicitud.observaciones FROM ((((solicitud 
                INNER JOIN motivo_solicitud ON solicitud.id_motivo = motivo_solicitud.id) 
                INNER JOIN empleado ON solicitud.id_empleado = empleado.id)
                INNER JOIN cargo ON empleado.id_cargo = cargo.id)
                INNER JOIN area ON cargo.id_area = area.id) WHERE solicitud.id= $id");
    $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_OBJ);
        
    }


?>

<tr>
    <td><?= $row->id ?></td>
    <td><?= $row->nombre_motivo ?></td>
    <td><?= $row->fecha_inicio ?></td>
    <td><?= $row->fecha_final ?></td>
<td>



<br>
    <!--Container Main start-->
    <div class="height-100 bg-light container">
        <div class="row">
            <h2>Solicitudes</h2>
    </div>
        
<div class="row g-5">
    <div>
        <h4 class="mb-3"><b>Solicitud Radicada</b></h4>
        <form class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-sm-12">
                    <label for="firstName" class="form-label">Nombre </label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="Mauricio"
                        required disabled>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>
                <div class="col-6">
                    <label for="username" class="form-label">Cargo</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" id="username" placeholder="Asistente de ventas"
                            required disabled>
                        <div class="invalid-feedback">
                            Your username is required.
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <label for="email" class="form-label">Area o Dependencia</label>
                    <input type="email" class="form-control" id="email" placeholder="Comercial" required
                        disabled>
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
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

                <div class="col-md-6">
                    <label for="country" class="form-label">Motivo</label>
                    <select class="form-select" id="country" required disabled>
                        <option value="">Salud</option>
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
            <br class="my-4">
            <div class="row gy-6">
                <div class="col-md-12">
                    <label for="comment" class="form-label">Observaciones <span
                        class="text-muted">(Opcional)</span></label>
                    <textarea class="form-control" rows="1" id="comment" name="text" placeholder="Importante cita con especialista para revisión de examenes y asignación de operación"
                        required disabled></textarea>
                </div>
            </div>
        </form>
    </div>
</div>
<hr>
<h6 class="mb-1"> <b>NOTA: En cada uno de estos permisos solicitados por el empleado se debe
    anexar soporte</b>
</h6>
<h6 class="mb-1">Yo Mauricio Perez, Reconozco que por medio de esta solicitud de permiso en
horarios laborales existe el
riesgo de peligros, daños, lesiones y enfermedades que pudieran ocasionarme cualquier tipo de
perturbación
funcional, psiquiátrica, una
invalidez o la muerte, y estoy de acuerdo en asumirlos, exonerando de toda responsabilidad a la empresa
SERVICREDITO S.A.</h6>

<h6 class="my-4">
<div class="form-check">
    <input type="checkbox" class="form-check-input" id="same-address" required disabled>
    <label class="form-check-label" for="same-address">Acepto terminos y condiciones</label>
</div>


<!--Boton cancelar solicitud-->
    <button type="button" class="w-100 btn btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdropenviosolictud">
        Cancelar solicitud
    </button>

<!-- Modal alerta cancelar solicitud-->
    <div class="modal fade" id="staticBackdropenviosolictud" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><b>Cancelar solicitud?</b></h5>
                    <a href="#">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </a>
                    </div>
                <div class="modal-body">
                    Para cancelar la solicitud presione "Cancelar" de lo contrario presione "Cerrar".
                </div>
                        <div class="modal-footer">
                            <a href="#">
                                <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop7">Cancelar</button>
                                    </a>
                                    <a href="solicitudes.php">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </a>
                </div>
            </div>
        </div>
    </div>

<br><br>

<!-- boton modificar -->

    <button type="button" class="w-100 btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Modificar solicitud
    </button>


<!-- Modal modificar -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><b>Modificar solicitud?</b></h5>
                <a href="verdoc.php">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </a>
            </div>
            <div class="modal-body">
                Para modificar la solicitud seleccione "modificar" de lo contrario seleccione "Cerrar".
            </div>
                <div class="modal-footer">
                    <a href="#">
                        <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop7">Modificar</button>
                    </a>
                    <a href="solicitudes.php">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </a>
                    </div>
            </div>
    </div>
</div>

<hr>
<?php 
    include('piedepagina.php');
?>