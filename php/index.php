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

  <h4>CONSTANTES</h4>
  <?php
  define('PI', 3.1416);
  if (defined('PI')) {
    echo 'El valor de PI es: ' . PI;
  }
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
    . '<br>MÓDULO => 10 % 3 = ' . $modulo;
  ?>

  <h4>ARRAYS</h4>
  <?php
  $arrayEjemplo = array(null, 'Juan', 'Pedro', 'Luis');
  $arrayEjemplo[] = 'Carlos';
  print_r($arrayEjemplo);
  echo '<br>';
  $array2Assoc = array('name' => 'Juan', 'surname' => 'Perez');
  print_r($array2Assoc);

  // IMPRIMIR VALORES DE UN ARRAY
  // list($nullValue, $ValueInIndex1) = $arrayEjemplo;
  [$nullValue, $ValueInIndex1] = $arrayEjemplo; //cuando el indice (posicion) NO tiene nombre
  ['name' => $name, 'surname' => $surname] = $array2Assoc; //cuando el indice (posicion) SI tiene nombre

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

  echo match ($dia) {
    "monday" => "Es lunes, inicio de semana.",
    "friday" => "Es viernes, casi fin de semana.",
    "saturday", "sunday" => "Es fin de semana.",
    default => "Es entre semana."
  };
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
  function saludar($nombre = "Pepe")
  {
    return "<br>Hola, $nombre";
  }
  echo saludar("CARACOLA");

  echo saludar();

  $coloresAssoc = ["red" => "Rojo", "blue" => "Azul", "green" => "Verde"];

  function iterarColores(iterable $colors)
  {
    $output = "";
    foreach ($colors as $position => $value) {
      $output .= "<span style='color: $position'> $value </span>";
    }
    return $output;
  }

  echo "<p>Función con <i>iterable</i> y array asociativo <br>" . iterarColores($coloresAssoc) . "</p>"
  ?>

  <h4>ARGUMENTOS VARIABLES EN FUNCIONES</h4>
  <?php
    function concatenar(...$args) :string {
      $resultado = "";
      foreach($args as $arg){
        $resultado .= $arg . " - ";
      }
      return $resultado;
    }

    echo concatenar("UNO", "dos", "TRES")
  ?>

  <h2>FUNCIONES DE VARIABLES</h2>
  <h4>isset() y unset()</h4>
  <?php
  $nombre = "Marco";
  if (isset($nombre)) {
    echo "La variable tiene el valor '$nombre'";
  }

  echo '<br> La variable tiene como valor = ' . $nombre . ', pero si aplicamos "unset", es ';
  unset($nombre);
  echo $nombre;
  ?>
<br>
<a href="form.php"><button type="button" style="margin:20px; padding: 10px; border-radius: 20px; border: 3px solid black; background-color:aquamarine">FORMULARIO</button></a>
<a href="login.php"><button type="button" style="margin:20px; padding: 10px; border-radius: 20px; border: 3px solid black; background-color:skyblue">- LOGIN -</button></a>

</body>

</html>