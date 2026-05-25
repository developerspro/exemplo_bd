<?php

class Dao{ 

private $dsn; 
private $username;
private $password;
private $pdo;

public function __construct(){
 $this->dsn = "mysql:host=localhost;dbname=bd;port=3306";
 $this->username = "root";
 $this->password = "";
 $this->pdo = new PDO($this->dsn, $this->username, $this->password);
}

public function listarUsuarios(){ 

$sql = "select * from usuario";
$resultado = $this->pdo->query($sql);
$dados = $resultado->fetchAll();
return $dados;
}

public function removerUsuario($id){
    
$resultado = $this->pdo->prepare("DELETE FROM usuario WHERE id = :id");
$resultado->bindParam(':id', $id);
return $resultado->execute();
}


}
/*


$user = $_POST["usuario"];
$passwd = $_POST["senha"];


$stmt = $pdo->prepare("INSERT INTO usuario (usuario, senha) VALUES (:user, :passwd)");
$stmt->bindParam(':user', $user);
$stmt->bindParam(':passwd', $passwd);
$stmt->execute();
*/