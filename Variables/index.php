<?php
$nome = "João";
$sobrenome = " Victor";

$nomeCompleto = $nome . $sobrenome;

echo $nomeCompleto;

unset($nome);

if(isset($nome)) {
    // isset verifica se a variável tem alguma coisa
    echo $nome;
}