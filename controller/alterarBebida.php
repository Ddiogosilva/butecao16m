<?php
include_once("../tela/header.php");
require_once("../model/conexao.php");
require_once("../model/bancoBebidas.php");


extract($_REQUEST,EXTR_OVERWRITE);

if ( alterarBebida($conexao, $idProduto, $nomeProduto, $valor, $descricao) ) {
    echo("alterado com sucesso");
}else {
    echo("não foi possivel fazer a alteração");
}

?>