<?php
// IMPORTAR CONEXION CON BBDD
require 'db.php';

// DATOS FORMULARIO REGISTRO
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $contrasena1 = $_POST['contrasena1'];
    $imagen_perfil = $_FILES['imagen_perfil']['name'];
    $target_dir = "images/";
    $target_file = $target_dir . $email . "fotoPerfil.jpg";
    $error_message = '';

    // COMPROBAR SI LAS CONTRASEÑAS SON IGUALES
    if ($contrasena !== $contrasena1) {
        $error_message = "Las contraseñas no coinciden. Inténtelo de nuevo.";
    }

    // COMPROBAR FORMATO DEL EMAIL
    if (empty($error_message)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_message = "El formato del email no es válido.";
        }
    }

    // COMPROBAR SI EL EMAIL YA EXISTE EN LA BBDD
    if (empty($error_message)) {
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email]);

        if ($stmt->rowCount() > 0) {
            $error_message = "Este email ya está registrado.";
        }
    }

    // SI NO HAY ERRORES, SUBIR LA IMAGEN Y GUARDAR LOS DATOS
    if (empty($error_message)) {
        if (move_uploaded_file($_FILES['imagen_perfil']['tmp_name'], $target_file)) {
            $sql = "INSERT INTO usuarios (nombre, apellidos, fecha_nacimiento, email, contrasena, foto) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            if ($stmt->execute([$nombre, $apellido, $fecha_nacimiento, $email, $contrasena, $target_file])) {

                // Redireccionar a la pagina del perfil con sus datos a través del email
                header("Location: profile.php?email=" . urlencode($email));
                exit();

            } else {
                $error_message = "Error(BBDD): " . $stmt->errorInfo()[2];
            }
        } else {
            $error_message = "Error al subir la imagen.";
        }
    }

    // MOSTRAR MENSAJE DE ERROR
    if (!empty($error_message)) {
        echo "<div style='font-weight: bold; font-size: 30px; background: red; color: white; padding: 10px; margin: 10px 0;'>$error_message</div>";
    }
}
?>