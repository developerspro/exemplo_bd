<div class="row">
    <div class="col"></div>
    <div class="col">
        <form action="principal.php" method="post">
  <div class="mb-3">
    <label for="" class="form-label">Usuario</label>
    <input type="text" name="usuario" class="form-control" id="" aria-describedby="">

  </div>
  <div class="mb-3">
    <label for="" class="form-label">Senha</label>
    <input type="password" name="senha" class="form-control" id="">
  </div>
  
  <button type="submit" class="btn btn-primary">Enviar</button>
</form></div>
    <div class="col"></div>
</div>
<?php 
if(isset($_GET["erro"]) && $_GET["erro"]==1){
    ?>
<div class="row">
    <div class="col"></div>
    <div class="col bg-danger mt-3 rounded"> Erro ao validar dados</div>
    <div class="col"></div>
</div>
<?php }else {

}
?>