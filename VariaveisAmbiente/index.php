<?php

//Variáveis predefinidas ou superglobais

$a = (int)$_GET["a"];
$b = (int)$_GET["b"];

//var_dump($nome.$b);

$ip = $_SERVER["SCRIPT_NAME"];

echo "$ip";
?>