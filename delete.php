<?php
include 'connexion.php';
$id = $_GET['id'];
$request = "DELETE FROM  posts WHERE id='$id'";
$query = mysqli_query($connexion, $request);
