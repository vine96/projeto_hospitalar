<?php

$user = "root";
$host = 'localhost';
$dbname = "miojo";
$password = '';


$conexao = mysqli_connect($host, $user, $password, $dbname);
mysqli_query($conexao, "SET NAMES 'utf8'");
if (!$conexao) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>
