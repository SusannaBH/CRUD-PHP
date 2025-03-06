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
  <h1>Lista de posts</h1>
  <ul>
    <?php
      $sql = "SELECT id, title, body FROM posts";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

      if ($posts) {
          foreach ($posts as $post) {
              echo "ID: " . $post["id"] . " - Title: " . $post["title"] . " - Body: " . $post["body"] . "<br>";
          }
      } else {
          echo "No hay registros.";
      }
    ?>
</body>
</html>