<?php 

function inserirBebida($conexao, $nomeProduto, $valor, $descricao){
    $query = "insert into bebidas(nomeProduto, valor, descricao)values('{$nomeProduto}','{$valor}','{$descricao}')";
    return mysqli_query($conexao, $query);
}

function deletarBebida($conexao, $idProduto){
    $query= " delete from bebidas where idProduto ='{$idProduto}'";
    $result= mysqli_query($conexao, $query);
    return  $result;
}

function alterarBebida($conexao, $idProduto, $nomeProduto, $valor, $descricao){
    $query = " update bebidas set nomeProduto = '{$nomeProduto}' , valor= '{$valor}' , descricao= '{$descricao}' where idProduto = '{$idProduto}'";
    $result = mysqli_query($conexao, $query);
    return $result;
}

function buscarNomeBebida($conexao, $nomeProduto){
    $query = " select * from bebidas where nomeProduto like '%{$nomeProduto}%'";
    $result = mysqli_query($conexao, $query);
    return  $result;
}

function buscarIDBebida($conexao, $idProduto){
    $query = " select * from bebidas where idProduto like '%{$idProduto}%'";
    $result = mysqli_query($conexao, $query);
    $result = mysqli_fetch_array($result);
    return $result;

}

?>