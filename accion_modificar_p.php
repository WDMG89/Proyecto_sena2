    <?php
    if (
        empty($_POST['rango']) or empty($_POST['usuario'])
    ) {
        header('location:parametrizacion.php');
    } else {
        session_start();
        $rango     =     ($_POST['rango']);
        $usuario   =     ($_POST['usuario']); 

        require_once('conexiondb.php');

        $sql4 = "UPDATE empleado SET id_rango = '$rango' WHERE usuario = '$usuario'";

        $conn->exec($sql4);

        $conn = null;
    }
    header('location:parametrizacion.php');
    ?>

