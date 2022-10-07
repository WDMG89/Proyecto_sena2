<?php
    require_once('menu_superior.php');
    require_once('menu_lateral.php');
?>


<div class="height-100 bg-light container">
        <div class="row">
            <h2>Gestionar Solicitud</h2>
        </div>


        <div class="row g-5">
            <div>
                <br>
                <h4 class="mb-3"><b>Solicitud Aprobada</b></h4>
                <form class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Nombre </label>
                            <input type="text" class="form-control" id="firstName" placeholder="Mauricio"
                                required disabled>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Perez" required
                                disabled>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
<hr>
                        <div class="col-12">
                            <label for="email" class="form-label">Area o Dependencia</label>
                            <input type="email" class="form-control" id="email" placeholder="Comercial" required
                                disabled>
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">Cargo</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="username" placeholder="Asistente de ventas"
                                    required disabled>
                                <div class="invalid-feedback">
                                    Your username is required.
                                </div>
                            </div>
                        </div>
<hr>
                        <div class="col-sm-3">
                            <label for="country" class="form-label">Fecha de salida</label>
                            <input id="startDate" class="form-control" type="date" required disabled />
                        </div>

                        <div class="col-sm-3">
                            <label for="country" class="form-label">Hora de salida</label>
                            <input type="time" class="form-control" id="appt" name="appt" min="09:00" max="18:00"
                                required disabled>
                        </div>

                        <div class="col-sm-3">
                            <label for="country" class="form-label">Fecha de regreso</label>
                            <input id="startDate" class="form-control" type="date" required disabled />
                        </div>

                        <div class="col-sm-3">
                            <label for="country" class="form-label">Hora de regreso</label>
                            <input type="time" class="form-control" id="appt" name="appt" min="09:00" max="18:00"
                                required disabled>
                        </div>

                        <div class="col-sm-3">
                            <label for="country" class="form-label">Horas de permiso</label>
                            <input type="time" class="form-control" id="appt" name="appt" min="09:00" max="18:00"
                                required disabled>
                        </div>

                        <div class="col-sm-3">
                            <label for="country" class="form-label">Valor Importe Permiso</label>
                            <input type="number" class="form-control" id="appt" name="appt" min="09:00" max="18:00"
                                required disabled>
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
<hr>
                    <br class="my-4">
                    <div class="row gy-6">
                        <div class="col-md-12">
                            <label for="comment" class="form-label">Observaciones <span
                                    class="text-muted">(Opcional)</span></label>
                            <textarea class="form-control" rows="2" id="comment" name="text" placeholder="Importante cita con especialista para revisión de examenes y asignación de operación"
                                required disabled></textarea>
                            <!--input type="text" class="form-control" id="cc-name"
                                placeholder="Importante cita con especialista para revisión de examenes y asignación de operación"
                                required disabled-->
                </form>
            </div>
        </div>
<hr>              
                <!-- boton autorizar -->
                <div class="row g-">
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
                                    <h5 class="modal-title" id="staticBackdropLabel"><b>Envio exitoso</b></h5>
                                    <a href="pendientesG.php">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    </a>
                                </div>
                                <div class="modal-body">
                                    La solicitud se ha autorizado exitosamente
                                </div>
                                <div class="modal-footer">
                                    <a href="pendientesG.php">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <br>
            <!-- boton negar -->
                <div class="row g-">
                    <button type="button" class="w-100 btn btn-danger btn-lg" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop6">
                        Negar solicitud
                    </button>
                </div>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel"><b>Envio exitoso</b></h5>
                                    <a href="pendientesG.php">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    </a>
                                </div>
                                <div class="modal-body">
                                    La solicitud se ha negado exitosamente
                                </div>
                                <div class="modal-footer">
                                    <a href="pendientesG.php">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

</div>     
<hr>

<?php 
    include('piedepagina.php');
?>