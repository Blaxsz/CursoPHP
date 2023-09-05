<?php
$nome = "João";
$sobrenome = " Victor";

$nomeCompleto = $nome . $sobrenome;

echo $nomeCompleto;

unset($nome);

if(isset($nome)) {
    echo $nome;
}