<?php
include_once("../view/header.php");
require_once("../model/conexao.php");
require_once("../model/bancoBebidas");


extract($_REQUEST,EXTR_OVERWRITE);

if ( alterarBebida($conexao, $idProduto, $nomeProduto, $valor, $descricao) ) {
    echo("");
}else {
    echo("");
}

?>