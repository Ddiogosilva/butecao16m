<?php
include_once("../view/header.php");
require_once("../model/conexao.php");
require_once("../model/bancoBebidas");


extract($_REQUEST,EXTR_OVERWRITE);

if ( deletarBebida($conexao, $idProduto) ) {
    echo("");
}else {
    echo("");
}

?>