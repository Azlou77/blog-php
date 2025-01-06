<?php include 'connexion.php';
$title = $_POST['title'];
$content = $_POST['content'];

$request = "INSERT INTO articles (title, content) VALUES ('$title', '$content')";
$query = mysqli_query($connexion, $request);
