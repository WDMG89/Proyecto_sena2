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
        echo "connected successfully";


        $stmt = $conn->prepare("SELECT id, id_motivo, fecha_inicio, id_estado FROM solicitud");
        $stmt->execute();

        $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
        

    } catch(PDOException $e) {
        echo "Conexion fallida: " . $e->getMessage();
    }

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
                        <th scope="col">#</th>
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
                        <th scope="row">1</th>
                        <td><?=$row->id?></td>
                        <td><?=$row->id_motivo?></td>
                        <td><?=$row->fecha_inicio?></td>
                        <td><?=$row->id_estado?></td>
                        
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
    include('piedepagina.php');
?>