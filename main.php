<?php

require_once "autoload.php";

use Classes\Pokemon;

$database = new PDO('mysql:host=localhost;dbname=postgrad', 'root', '');

$name = $_POST['name'];
$code = $_POST['code'];
$power = $_POST['power'];
$type = implode(", ", $_POST['types']);

$pokemon = new Pokemon($name, $code, $power, $type);

$database->exec("INSERT INTO pokemon (name, code, power, type) VALUES ('$name', '$code', '$power', '$type')");

echo "<script> location.href='index.html'; </script>";
echo "<script type='text/javascript'>alert('teste');</script>";
echo "console.log('chegou')";
//echo "javascript:window.location='index.html';</script>";
exit;
?>