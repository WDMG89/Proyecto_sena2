<?php
    session_start();
    require_once('menu_superior.php');
    require_once('menu_lateral.php');
    require_once('conexiondb.php');
    
    $stmt = $conn->prepare("SELECT empleado.nombre AS nombre_empleado, cargo.nombre AS nombre_cargo, cargo.salario, area.nombre AS nombre_area FROM (empleado 
    INNER JOIN cargo ON empleado.id_cargo = cargo.id 
    INNER JOIN area ON cargo.id_area = area.id)");
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_OBJ);
 
?>

    <!--Container Main start-->
    <br><br><br>
    <div class="height-100 bg-light container">
        <div class="row">
            <h2>Gestionar Solicitud</h2>
        </div>
        <br>
                <div class="row g-5">
                    <div>
                        <form>"needs-validation" novalidate>
                            <div class="row g-3">
                                <div class="col-sm-12">
                                    <label for="firstName" class="form-label">Nombre </label>
                                    <input type="text" class="form-control" id="firstName" placeholder="Mauricio"
                                        required disabled>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
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

                                <div class="col-6">
                                    <label for="username" class="form-label">Cargo</label>
                                    <div class="input-group has-validation">
                                        <input type="text" class="form-control" id="username"
                                            placeholder="Asistente de ventas" required disabled>
                                        <div class="invalid-feedback">
                                            Your username is required.
                                        </div>
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

                    <div class="col-sm-3">
                        <label for="importe" class="form-label">Valor Importe Permiso</label>
                        <input type="number" class="form-control" id="importe" name="importe" value="<?= $importe ?>" required disabled>
                    </div>

                                <div class="col-md-6">
                        <label for="motivo_solicitud" class="form-label">Motivo</label>
                        <select class="form-select" name="motivo_solicitud" id="motivo_solicitud" required>
                            <?php foreach ($rows as $row) { ?>
                                <option value="<?= $row->id_motivo ?>"><?= $row->nombre_motivo ?></option>
                            <?php } ?>
                        </select>
                    </div>

                                
                                <div class="col-md-9">
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
                                    <label for="cc-name" class="form-label">Observaciones <span
                                            class="text-muted">(Opcional)</span></label>
                                    <input type="text" class="form-control" id="cc-name"
                                        placeholder="Importante cita con especialista para revisión de examenes y asignación de operación"
                                        required disabled>
                                </div>
                        </form>
                    </div>
                </div>
        <hr>
        <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <button type="button" class="w-100 btn btn-success btn-lg" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                Autorizar solicitud
                                </button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel"><b>Autorizacion exitosa</b>
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            a solicitud se ha autorizado exitosamente
                                        </div>
                                        <div class="modal-footer">
                                            <a href="gestionar.html">
                                                <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cerrar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                    <button type="button" class="w-100 btn btn-danger btn-lg" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop2">
                                    Negar solicitud
                                </button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel"><b>Negacion exitosa</b></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Solicitud negada exitosamente
                                        </div>
                                        <div class="modal-footer">
                                            <a href="gestionar.php">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>                         
                            <div class="col-sm-4">
                                <button type="button" class="w-100 btn btn-warning btn-lg" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop3">
                                Pendientes
                                </button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel"><b>pendiente exitosa</b></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                            <div class="modal-body">
                                                enviada a pendientes
                                            </div>
                                        <div class="modal-footer">
                                            <a href="gestionar.php">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>   
</div> 
<hr>
<?php require_once("piedepagina.php") ?>