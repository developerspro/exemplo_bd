<?php
$dsn = "mysql:host=localhost;dbname=bd;port=3306";
$username = "root";
$password = "";
$pdo = new PDO($dsn, $username, $password);

$resultado = $pdo->query("select * from usuario");

if($resultado->rowCount()>0){
while($usuario = $resultado->fetch()){
    echo "<pre>";
    
    echo "ID: ".$usuario["id"]."<br>";
    echo "Usuario: ".$usuario["usuario"]."<br>";
    echo "Senha: ***** ";
   
}
} else { 

echo "Sem dados para exibição";
}