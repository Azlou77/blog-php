<?php
include 'connexion.php';
$id_category = $_GET['id_category'];
$request = "DELETE FROM  category WHERE id_category='$id_category'";
$query = mysqli_query($connexion, $request);
