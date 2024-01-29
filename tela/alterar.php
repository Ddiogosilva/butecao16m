<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoBebidas.php");

?>

<!--inicio formulario -->
<div class = "conteiner m-5 "></div>

<form class = "row g-3" method="POST" action= "#">

<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputCodigo" class="col-form-label">Digite o Nome</label>
  </div>
  <div class="col-auto">
    <input type="text" id="inputCodigo" name= "nomeProduto" class="form-control" aria-describedby="passwordHelpInline">
  </div>

  <div class="col-auto">
  <button type="submit" class="btn btn-primary">Buscar</button>
</div>
</div>
</form>
<!--fim formulario -->

<!-- inicio tabela -->

<table class="table">
  <thead>
    <tr>
      <th scope="col">código</th>
      <th scope="col">Nome</th>
      <th scope="col">valor</th>
      <th scope="col">descrição</th>
      <th scope="col">Alterar</th>
    </tr>
  </thead>
  <tbody>
    <?php
      extract($_REQUEST,EXTR_OVERWRITE);

      $nomeProduto = isset($nomeProduto)?$nomeProduto : "";

      if($nomeProduto){

        $dados = buscarNomeBebida($conexao, $nomeProduto);

        foreach ($dados as $bebidas) :
    
    ?>
      
   <tr>
      <th scope="row"><?php echo($bebidas["idProduto"]) ?></th>

      <td> <?= $bebidas["nomeProduto"] ?> </td>
      
      <td> <?= $bebidas["valor"] ?></td>
      
      <td> <?= $bebidas["descricao"] ?></td>
      
      <td> 
        <a class= "btn btn-primary" href= "alterarBebida.php?idProduto=<?= $bebidas["idProduto"] ?>"> Alterar </a>  
      
      </td>
    </tr>
       <?php 
         endforeach;
         }
       ?>
          
    
  </tbody>
</table>

<!-- fim tabela -->

<?php
include_once("footer.php");

?>