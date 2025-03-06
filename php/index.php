<?php
require 'db.php'; // Importa la conexión a la base de datos
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP tutorial</title>
</head>

<body>
  <h1 style="color: orange; font-family: Georgia, serif;">PROGRAMACIÓN BÁSICA EN PHP</h1>
  
  <h4>VARIABLES Y TIPOS DE DATOS</h4>
  <?php
  $nombreString = "Susanna Bergaz"; 
  $edadNumeroEntero = 30;
  $alturaNumeroFloat = 1.63;
  $verFalBoolean = true;
  $simpaticaOperacionTernaria = $verFalBoolean ? 'Si :)' : 'No :(';

  echo '(STRING) Nombre y apellidos: ' . $nombreString 
  . '<br>(NUMERO ENTERO) Edad: ' . $edadNumeroEntero 
  . ' años<br>(FLOAT) Altura: ' . $alturaNumeroFloat 
  . '<br>(BOOLEAN + TERNARIO) ¿Eres simpatica? ' . $simpaticaOperacionTernaria;
  ?>

  <h4>OPERADORES BÁSICOS</h4>
  <?php
  $suma = 5 + 3;
  $resta = 10 - 4;
  $multiplicacion = 3 * 3;
  $division = 15 / 5;
  $modulo = 10 % 3;

  echo 'SUMA => 5 + 3 = ' . $suma 
  . '<br>RESTA => 10 - 4 = ' . $resta 
  . '<br>MULTIPLICACIÓN => 3 x 3 = ' . $multiplicacion 
  . '<br>DIVISIÓN => 15 / 5 = ' . $division
  . '<br>MÓDULO => 10 % 3 = '. $modulo;
  ?>

  <!-- ARRAYS -->
  <h4>ARRAYS</h4>
  <?php
  $arrayEjemplo = array(null, 'Juan', 'Pedro', 'Luis');
  $arrayEjemplo[] = 'Carlos';
  print_r($arrayEjemplo);
  echo '<br>';
  $array2Assoc = array('nombre' => 'Juan', 'apellido' => 'Perez');
  print_r($array2Assoc);
  ?>

    <h4>CONDICIONALES</h4>
    <?php
    echo '¿Cuánto mides? ';
    if ($alturaNumeroFloat >= 1.75) {
        echo "SOY ALTA";
    } elseif ($alturaNumeroFloat >= 1.55) {
      echo "SOY NORMAL";
    } else {
        echo "SOY UN MINION";
    }
    ?>

    <h4>SWITCH</h4>
    <?php
    $dia = new DateTime();

    switch ($dia) {
        case "monday":
            echo "Es lunes, inicio de semana.";
            break;
        case "friday":
            echo "Es viernes, casi fin de semana.";
            break;
        case "saturday":
        case "sunday":
            echo "Es fin de semana.";
            break;
        default:
            echo "Es entre semana.";
            break;
    }
    ?>

<h2>BUCLES</h2>
    <h4>Bucle for</h4>
    <?php
    for ($i = 0; $i < 5; $i++) {
        echo "Número: $i <br>";
    }
    ?>

    <h4>Bucle while</h4>
    <?php
    $contador = 0;
    while ($contador < 3) {
        echo "Contador: $contador <br>";
        $contador++;
    }
    ?>

    <h4>Bucle foreach</h4>
    <?php
    $colores = ["amarillo", "rosa", "negro", "blanco"];

    foreach ($colores as $color) {
        echo "Es color $color <br>";
    }
    ?>

    <h2>FUNCIONES</h2>
    <?php
    function saludar($nombre) {
        return "Hola, $nombre";
    }

    echo saludar("CARACOLA");
    ?>

</body>

</html>