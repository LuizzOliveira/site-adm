<?php
$caminhoArquivo = __DIR__ . '../.env';
$conteudoArquivo = file($caminhoArquivo);

$variavel =[];

array_map(
    function($linha) use (&$variaveis){
        ($key, $val) = explode("=", $linha);

        $variaveis[$key] = $val;
    },
    $conteudoArquivo
);

define('VARIAVEIS', $variaveis);