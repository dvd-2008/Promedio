<?php
require_once 'Alumno.php';

if(isset($_POST['nombre']) && isset($_POST['ep']) && isset($_POST['ef']) && isset($_POST['pp'])) {
    $nombre = $_POST['nombre'];
    $ep = $_POST['ep'];
    $ef = $_POST['ef'];
    $pp = $_POST['pp'];

    try {
        $alumno = new Alumno($nombre, $ep, $ef, $pp);
        $promedio = number_format($alumno->calcularPromedio(), 2); 
        $estado = $alumno->determinarEstado();
        echo "<table class='table table-striped table-hover'>";
        echo "<tr><th>NOMBRE</th><th>PROMEDIO</th><th>ESTADO</th></tr>";
        echo "<tr><td>$nombre</td><td>$promedio</td><td>$estado</td></tr>";
        echo "</table>";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Error: No se han recibido los datos necesarios.";
}
?>
