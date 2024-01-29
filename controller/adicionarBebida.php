<?php
include_once("../tela/header.php");
require_once("../model/conexao.php");
require_once("../model/bancoBebidas.php");


extract($_REQUEST,EXTR_OVERWRITE);

if ( inserirBebida($conexao, $nomeProduto, $valor, $descricao) ) {
    echo("cadastrado com Sucesso");
}else {
    echo("castro não concluido");
}

?>