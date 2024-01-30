<?php
include_once("../tela/header.php");
require_once("../model/conexao.php");
require_once("../model/bancoBebidas.php");


extract($_REQUEST,EXTR_OVERWRITE);

if ( deletarBebida($conexao, $idProduto) ) {
    echo("Sucesso");
}else {
    echo("Falha");
}

?>