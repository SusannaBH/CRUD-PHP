<?php
// IMPORTAR CONEXION CON BBDD
require 'db.php';

// OBTENER EMAIL DE REFERENCIA PARA DATOS DE USUARIO
$emailUsuario = $_GET['email'];

// OBTENER DATOS DEL USUARIO
$sql = "SELECT * FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$emailUsuario]);
$usuarioLogin = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$usuarioLogin) {
    echo "Usuario no encontrado.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playwrite+HU:wght@100..400&display=swap');
        body{
            background-color:rgb(252, 209, 240);
        }
        h1{
            font-family: "Playwrite HU", sans-serif;
            font-weight: bold;
            height: 50px;
            color: purple;
        }
        img {
            width: 100%;
            padding: 20px;
            max-width: 400px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
        <h1>Perfil de Usuario</h1>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="card-title"><?php echo htmlspecialchars($usuarioLogin['nombre'] . ' ' . $usuarioLogin['apellidos']); ?></h3>
                        <p class="card-text"><strong>Correo electrónico:</strong> <?php echo htmlspecialchars($usuarioLogin['email']); ?></p>
                        <?php
                        $fecha_nacimiento = new DateTime($usuarioLogin['fecha_nacimiento']);
                        $hoy = new DateTime();
                        // Calcula la diferencia entre una fecha y la otra (objetos Datetime)
                        $edad = $hoy->diff($fecha_nacimiento);
                        ?>
                        <p class="card-text"><strong>Edad:</strong> <?php echo $edad->y . ' años (' . $fecha_nacimiento->format('d/m/Y') . ')'; ?> </p>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo htmlspecialchars($usuarioLogin['foto']); ?>" alt="Imagen de Perfil" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <a href="login.php"><button type="button" style="margin:20px; padding: 10px; border-radius: 20px; border: 3px solid black; background-color:pink">⬅️ VOLVER</button></a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>