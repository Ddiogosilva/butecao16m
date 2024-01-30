<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoBebidas.php");
 
 
 
 extract($_REQUEST,EXTR_OVERWRITE);
 
 $idProduto = isset($idProduto) ? $idProduto : "";
 
 if ($idProduto){
 
    $bebidas = buscarIDBebida($conexao, $idProduto);
 
 
 ?>

    <div class="container">
        <form class="row g-3" method = "Post" action= "../controller/alterarBebida.php">
        <input type="hidden" value=" <?php echo($bebidas["idProduto"])?>" name="idProduto" id="inputNome">

        <div class="col-md-8">
            <label for="inputNome" class="form-label">Produto</label>
            <input type="text" class="form-control" value=" <?php echo($bebidas["nomeProduto"])?>" name="nomeProduto" id="inputNome">
        </div>
        
        <div class="col-md-4">
            <label for="inputFone" class="form-label">valor</label>
            <input type="text" class="form-control" value=" <?php echo($bebidas["valor"])?>" name="valor" id="inputFone">
        </div>

        <div class="col-md-8">
            <label for="inputNome" class="form-label">descrição</label>
            <input type="text" class="form-control" value=" <?php echo($bebidas["descricao"])?>" name="descricao" id="inputNome">
        </div>
        
        <div class="col-12">
            <button type="submit" class="btn btn-primary"> alterar Bebida</button>
        </div>
        </form>
    </div>   
 
 
<?php
} else {
    echo("Dados não encontrados");
}
 
include_once("footer.php");
 
?>