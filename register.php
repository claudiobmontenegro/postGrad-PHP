<?php

require_once "autoload.php";

use Classes\Pokemon;

try {
    $database = new PDO('mysql:host=localhost;dbname=postgrad', 'root', '');
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

$name = $_POST['name'];
$code = $_POST['code'];
$power = $_POST['power'];
$type = implode(", ", $_POST['types']);

$pokemon = new Pokemon($name, $code, $power, $type);

$database->exec("INSERT INTO pokemon (name, code, power, type) VALUES ('$name', '$code', '$power', '$type')");

echo "<script type='text/javascript'>alert('Pokemon Cadastrado com Sucesso.');</script>";
echo "<script> location.href='list.php'; </script>";
?>