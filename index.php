<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado del Alumno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container mt-5">
    <h2>Calculo de Promedio</h2>
    <form id="alumnoForm" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre del Alumno:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del alumno">
        </div>
        <div class="form-group">
            <label for="ep">Examen Parcial:</label>
            <input type="number" class="form-control" id="ep" name="ep" placeholder="Ingrese la nota del examen parcial">
        </div>
        <div class="form-group">
            <label for="ef">Examen Final:</label>
            <input type="number" class="form-control" id="ef" name="ef" placeholder="Ingrese la nota del examen final">
        </div>
        <div class="form-group">
            <label for="pp">Promedio de Prácticas:</label>
            <input type="number" class="form-control" id="pp" name="pp" placeholder="Ingrese el promedio de prácticas">
        </div>
        <button type="submit" class="btn btn-primary" name="promedio"> Promedio</button>
    </form>
    <div id="resultado" class="mt-3"></div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(){
        $('#alumnoForm').submit(function(e){
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'procesar.php',
                data: $(this).serialize(),
                success: function(response){
                    $('#resultado').html(response);
                }
            });
        });
    });
</script>

</body>
</html>
