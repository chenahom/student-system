<?php
$host = "mysql.railway.internal";
$user = "root";
$password = "AtQPYgUmjcLrexzhIxSCaWwmINfRedas";
$database = "railway";
$port = "3306";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
