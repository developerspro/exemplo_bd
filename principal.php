<?php
require_once "autoload.php";

$dsn = "mysql:host=localhost;dbname=bd;port=3306";
$username = "root";
$password = "";
$pdo = new PDO($dsn, $username, $password);
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$sql = "select * from usuario where usuario='".$usuario."' and senha='".$senha."'";

$resultado = $pdo->query($sql);

if($resultado->rowCount()>0){
    $pg = new Pagina();
    $pg->index("pagina_principal");
} else { 
    header("Location: index.php?erro=1");
//     echo "usuario ou senha invalida";
//     echo "<a href=\"index.php?erro=1\">voltar</a>";
// 
}

?>
   

