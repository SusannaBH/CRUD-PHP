<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO COMPLETADO</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
    
        <h2>Datos recibidos</h2>
        <p>Nombre: <?php echo $_POST['nombre']; ?></p>

        <!-- Cuando el campo no es obligatorio, es mejor comprobar con isset y aegurar no devolver un error -->
        <p>Apellidos: <?php echo isset($_POST['apellidos']) ? $_POST['apellidos'] : ''; ?></p>

        <?php
        $fecha_nacimiento = new DateTime($_POST['fecha_nacimiento']);
        $hoy = new DateTime();
        // Calcula la diferencia entre una fecha y la otra (objetos Datetime)
        $edad = $hoy->diff($fecha_nacimiento);
        ?>
        <p>Edad: <?php echo $edad->y; ?></p>

        <?php var_dump($_FILES); ?> <!-- Muestra informacion de la imagen (posibles errores) -->
        <?php if (isset($_FILES["imagen_perfil"]) && $_FILES["imagen_perfil"]['error'] == UPLOAD_ERR_OK): ?>
            <p>Tipo de imagen de perfil: <?php echo $_FILES["imagen_perfil"]["name"]; ?></p>
            <?php
            move_uploaded_file($_FILES["imagen_perfil"]["tmp_name"], "images/" . "imagen_prueba.jpg");
            ?>
            <img src="images/<?php echo $_FILES["imagen_perfil"]["name"]; ?>" alt="Imagen de perfil" style="width: 400px; ">
        <?php else: ?>
            <p>No se ha subido ninguna imagen de perfil o ha ocurrido un error.</p>
        <?php endif; ?>
        </p>
    </div>

    <a href="form.php"><button type="button" style="margin:20px; padding: 10px; border-radius: 20px; border: 3px solid black; background-color:pink">⬅️ VOLVER</button></a>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>