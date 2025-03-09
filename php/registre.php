<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playwrite+HU:wght@100..400&display=swap');
        body{
            background-color:rgb(252, 209, 240);
        }
        h2{
            text-align: center;
            font-family: "Playwrite HU", sans-serif;
            font-weight: bold;
            color: purple;
            margin-bottom: 20px;
            border: 2px solid purple;
            padding: 20px;
            border-radius: 15px;
            background-color: rgb(230, 136, 203);
        }
        .container2{
            display: flex;
            justify-content: flex-end;
        }
        .btn-custom{
            width: 400PX;
            font-family: "Playwrite HU", sans-serif;
            font-weight: bold;
            font-size: 20px;
            background-color:purple;
            border: 4px solid rgb(230, 136, 203);
            border-radius: 15px;
            color: rgb(230, 136, 203);
            padding: 10px;
            transition: all 0.3s ease-in-out;
        }
        .btn-custom:hover{
            background-color:rgb(32, 242, 172);
            border: 4px solid rgb(230, 136, 203);
            border-radius: 15px;
            color: rgb(230, 136, 203);
            transform: scale(1.1);
        }
        label{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Introduce tus datos personales</h2>
        <form action="process_registre.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombre">NOMBRE</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellidos">APELLIDOS</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
            </div>
            <div class="form-group">
                <label for="fecha_nacimiento">FECHA DE NACIMIENTO</label>
                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
            </div>
            <div class="form-group">
                <label for="email">CORREO ELECTRÓNICO</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="contrasena">CONTRASEÑA</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" required>
            </div>
            <div class="form-group">
                <label for="contrasena1">REPETIR CONTRASEÑA</label>
                <input type="password" class="form-control" id="contrasena1" name="contrasena1" required>
            </div>
            <div class="form-group">
                <label for="imagen_perfil">IMAGEN DE PERFIL</label>
                <input type="file" class="form-control-file" id="imagen_perfil" name="imagen_perfil" required>
            </div>
            <div class="container2 m-4">
                <button type="submit" class="btn btn-custom">Registrar nuevo usuario</button>
            </div>
            
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>