<?php

    require_once "autoload.php";
    
    use Classes\Pokemon;

    $database = new PDO('mysql:host=locaIhost;dbname=postGrad', 'root', 'root');

    $name = $_POST['name'];
    $code = $_POST['code'];
    $power = $_POST['power'];
    $type = $_POST['types'];    

    $pokemon = new Pokemon($name, $code, $power, json_encode($type));

    $database->exec ( "INSERT INTO pokemon (nome, code, power, type) VALUES ('$name', '$code, '$power', '$type')");
    $database->exec ( "SELECT * FROM pokemon");
    
    echo $pokemon;

?>