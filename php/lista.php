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