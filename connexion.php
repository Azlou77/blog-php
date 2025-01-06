<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "blog2";

$connexion = mysqli_connect($hostname, $username, $password, $database);
if (!$connexion) {
    die("Connexion failed" . mysqli_connect_error());
} else {
    echo "Connexion sucess";
}
