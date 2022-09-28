<?php
    include('menu_superior.php');
    include('menu_lateral.php');
?>


<!--Container Main start-->
<div class="height-100 bg-light container">
        <div class="row">
            <h2>Solicitudes</h2>
        </div>


        <div class="row g-5">

            <div>
                    <h4 class="mb-3">Solicitud</h4>
                <form class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Nombre </label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="Mauricio"
                                required disabled>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="Perez" required
                                disabled>
                            <div class="invalid-feedback">
                                Valid last name is required.
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

                        <div class="col-12">
                            <label for="email" class="form-label">Area o Dependencia</label>
                            <input type="email" class="form-control" id="email" placeholder="Comercial" required
                                disabled>
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <label for="country" class="form-label">Fecha de salida</label>
                            <input id="startDate" class="form-control" type="date" />
                        </div>

                        <div class="col-sm-3">
                            <label for="country" class="form-label">Hora de salida</label>
                            <input type="time" class="form-control" id="appt" name="appt" min="09:00" max="18:00"
                                required>
                        </div>

                        <div class="col-sm-3">
                            <label for="country" class="form-label">Fecha de regreso</label>
                            <input id="startDate" class="form-control" type="date" />
                        </div>


                        <div class="col-sm-3">
                            <label for="country" class="form-label">Hora de regreso</label>
                            <input type="time" class="form-control" id="appt" name="appt" min="09:00" max="18:00"
                                required>
                        </div>

                        <div class="col-md-6">
                            <label for="country" class="form-label">Motivo</label>
                            <select class="form-select" id="country" required>
                                <option value="">Seleccionar...</option>
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
                            <input type="text" class="form-control" id="cc-name" placeholder="">

                </form>
            </div>
        </div>

        <br>
        <h6 class="mb-1"> <b>NOTA: En cada uno de estos permisos solicitados por el empleado se debe
                anexar soporte</b>

        </h6>

        <br>
        <h6 class="mb-1">Yo Mauricio Perez, Reconozco que por medio de esta solicitud de permiso en
            horarios laborales existe el
            riesgo de peligros, daños, lesiones y enfermedades que pudieran ocasionarme cualquier tipo de
            perturbación
            funcional, psiquiátrica, una
            invalidez o la muerte, y estoy de acuerdo en asumirlos, exonerando de toda responsabilidad a la empresa
            SERVICREDITO S.A.</h6>

        <h6 class="my-4">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="same-address">
                <label class="form-check-label" for="same-address">Acepto terminos y condiciones</label>
            </div>
<hr>
            <!-- Button trigger modal -->
            <br>
                <h6 class="my-4">
                    <div class="mb-6">
                        <button type="button" class="w-100 btn btn-success btn-lg" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            Enviar solicitud
                        </button>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel"><b>Envio exitoso</b></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Su solicitud se ha enviado exitosamente
                                </div>
                                <div class="modal-footer">
                                    <a href="solicitudes.php">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
<br>

<?php 
    include('piedepagina.php');
?>