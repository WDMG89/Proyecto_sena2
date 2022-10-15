<?php

if (empty($_POST['fecha_inicio']) or empty($_POST['fecha_final']) or empty($_POST['motivo_solicitud']) 
or empty($_POST['observaciones']) or empty($_POST['numero_horas'])){
    print_r($_POST);
    die;

} else {
$nombre=         ($_POST['nombre']);
$cargo=          ($_POST['cargo']);
$area=           ($_POST['area']);
$fecha_inicio=   ($_POST['fecha_inicio']);
$fecha_final=    ($_POST['fecha_final']);
$motivo_solicitud=         ($_POST['motivo_solicitud']);
$observaciones=  ($_POST['observaciones']);
$id_empleado=    '1';
$importe=        '0';
$numero_horas=   ($_POST['numero_horas']);
$id_estado=      '2';

require_once('conexiondb.php');


$sql= "INSERT INTO solicitud ( id_empleado, id_estado, id_motivo, fecha_inicio, fecha_final, numero_horas, importe, observaciones)
VALUES ('$id_empleado', '$id_estado', '$motivo_solicitud', '$fecha_inicio', '$fecha_final', '$numero_horas', '$importe', '$observaciones')";
// use exec() because no results are returned
$conn->exec($sql);
$conn = null;
header('location:solicitudes.php');
}

?>