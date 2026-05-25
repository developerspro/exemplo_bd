<?php 
require_once "autoload.php";

$dao = new Dao();
if($dao->removerUsuario($_GET["id"])){
    echo "usuario removido";
} else { 

echo "Falha ao remover";
}
