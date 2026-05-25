<?php 

require_once("autoload.php");
$dao = new Dao();
?>
<div class="row">
    <div class="col-2"></div>
    <div class="col"><table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Usuario</th>
      <th scope="col">Senha</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $dados = $dao->listarUsuarios();
    foreach($dados as $linha){
    ?>
    <tr>
      <th scope="row"><?php echo $linha[0]?></th>
      <td><?php echo $linha[1]?></td>
      <td><?php echo $linha[2]?></td>
      <td><a href="exibir_usuario.php?id=<?php echo $linha["0"]?>" class="btn btn-success">Exibir</a>
        <a href="#" class="btn btn-info">Alterar</a> 
        <a href="remover_usuario.php?id=<?php echo $linha["0"]?>" class="btn btn-danger">Remover</a></td>
    </tr>
    <?php
    }
    ?>
  
  </tbody>
</table></div>
    <div class="col-2"></div>
</div>
