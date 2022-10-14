<?php
    if (empty($_POST['usuario']) or empty($_POST['contrasena'])) {
        header("location: Index.php");
    }else {

        $usuario    = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $dbname     = "solicitudausencias";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            

            $stmt = $conn->prepare("SELECT empleado.id, empleado.nombre AS nombre_empleado, cargo.nombre AS nombre_cargo, empleado.id_rango, empleado.super_user FROM (empleado INNER JOIN cargo ON empleado.id_cargo = cargo.id)
                WHERE usuario = '$usuario' AND contrasena = '$contrasena' ");
            $stmt->execute();

            

            if ($stmt->rowCount() > 0) {
                $row = $stmt->fetch(PDO::FETCH_OBJ);
                include_once('inicio.php');
            }else {
                header('location: Index.php');
            }    
        } catch (PDOException $e) {
            echo "Conexion fallida: " . $e->getMessage();
        }

    }


?>