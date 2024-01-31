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
      <th scope="col">deletar</th>
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
        <!-- botal da modal -->
      <button type="button" idProduto="<?php echo($bebidas["idProduto"]) ?>" nomeProduto="<?php echo($bebidas["nomeProduto"]) ?>" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#deletarModal">
      Deletar
      </button>
      
      </td>
    
    </tr>
       <?php 
         endforeach;
         }
       ?>
          
    
  </tbody>
</table> 
  

<!-- fim tabela -->

<!-- Modal -->
<div class="modal fade" id="deletarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Atenção na Exclusão</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <form action="../controller/deletarbebida.php" method="post">
          <input type= "hidden" value= "" class= "idProduto from-control" name= "idProduto">
          <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        
      </div>
    </div>
  </div>
</div>

<script>
  let deletarProdutoModal = document.getElementById('deletarModal');
      deletarProdutoModal.addEventListener('show.bs.modal' , function(event){ 

  let button = event.relatedTarget;
  let id_Produto = button.getAttribute ('idProduto');
  let nome_Produto = button.getAttribute('nomeProduto');

  let modalbody = deletarProdutoModal.querySelector('.modal-body');
  modalbody.textContent = 'Deseja realmente excluir o Produto ' + nome_Produto + ' ' + id_Produto + ' ?'

  let IDProduto = deletarProdutoModal.querySelector('.modal-footer .idProduto');
  IDProduto.value = id_Produto; 
  })
</script>

<?php
include_once("footer.php");

?>