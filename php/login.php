<?php
require 'db.php'; // Importa la conexión a la base de datos
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playwrite+HU:wght@100..400&display=swap');
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color:rgb(252, 209, 240);
        }
        .container {
            text-align: center;
        }
        .btn-custom {
            width: 250px;
            height: 70px;
            padding: 20px 20px;
            font-family: "Playwrite HU", sans-serif;
            font-size: 20px;
            font-weight: bold;
            border-radius: 10px;
            transition: all 0.2s ease-in-out;
        }
        .btn-primary-custom {
            background-color:rgb(127, 240, 82);
            border: 4px solid rgb(55, 98, 24);
            color: rgb(55, 98, 24);
        }
        .btn-primary-custom:hover {
            background-color:rgb(51, 255, 0);
            border-color:rgb(10, 86, 4);
            transform: scale(1.1);
            color: white;
        }
        .btn-secondary-custom {
            background-color:rgb(102, 225, 241);
            border: 4px solid rgb(26, 81, 171);
            color:  rgb(26, 81, 171);
        }
        .btn-secondary-custom:hover {
            background-color:rgb(0, 225, 255);
            border-color:rgb(0, 34, 255);
            transform: scale(1.1);
            color: white;
        }
    </style>
</head>

<body>
<div class="container">
    <a href="start.php"><button class="btn btn-custom btn-primary-custom mb-4">Inicio Sesión</button></a>
    <a href="registre.php"><button class="btn btn-custom btn-secondary-custom mt-4">Registro</button></a>
</div>
</body>

</html>