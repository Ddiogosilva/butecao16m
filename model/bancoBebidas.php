<?php 

function inserirBebida($conexao, $nomeProduto, $valor, $descricao){
    $query = "insert into bebidas(nomeProduto, valor, descricao) values('{$nomeProduto}' , '{$valor}' , '{$descricao}' ";
    $result = mysqli_query($conexao, $query);
    return $result;
}

function deletarBebida($conexao, $idProduto){
    $query = " delete from bebidas where idProduto = '{$idProduto}'";
    $result = mysqli_query($conexao, $query);
    return  $result;
}

function alterarBebida($conexao, $idProduto, $nomeProduto, $valor, $descricao){
    $query = " update bebidas set nomeProduto = '{$nomeProduto}' , valor= '{$valor}' , descricao= '{$descricao}' where idProduto = '{$idProduto}'";
    $result = mysqli_query($conexao, $query);
    return $result;
}

function buscarNomeBebida($conexao, $nomeProduto){
    $query = " select * from bebidas where noneProduto like '%{$nomeProduto}5'";
    $result = mysqli_query($conexao, $query);
    return  $result;
}

function buscarIDBebida($conexao, $idProduto){
    $query = " select * from bebidas where idProduto like '%{$idProduto}5'";
    $result = mysqli_query($conexao, $query);
    return $result;
}


?>