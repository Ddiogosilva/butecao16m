<?php 
include_once("../tela/header.php");
require_once("../model/conexao.php");
require_once("../model/bancoBebidas.php");

extract($_REQUEST, EXTR_OVERWRITE);

buscarNomeBebida($conexao, $nomeProduto);

header("Location: ../view/buscar.php");