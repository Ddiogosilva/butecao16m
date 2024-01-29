<?php
include_once("header.php");

?>

<div class="container">
    <form class="row g-3" method = "Post" action= "../controller/adicionarBebida.php">

    <div class="col-md-8">
        <label for="inputNome" class="form-label">Produto</label>
        <input type="text" class="form-control" name="nomeProduto" id="inputNome">
    </div>
    
    
    <div class="col-md-4">
        <label for="inputFone" class="form-label">valor</label>
        <input type="text" class="form-control" name="valor" id="inputFone">
    </div>

    <div class="col-md-8">
        <label for="inputNome" class="form-label">descrição</label>
        <input type="text" class="form-control" name="descricao" id="inputNome">
    </div>
    
    <div class="col-12">
        <button type="submit" class="btn btn-primary"> adicionar Bebida</button>
    </div>
    </form>
</div>    


<?php
include_once("footer.php");

?>