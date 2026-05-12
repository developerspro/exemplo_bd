<?php
$dsn = "mysql:host=localhost;dbname=bd;port=3306";
$username = "root";
$password = "";
$pdo = new PDO($dsn, $username, $password);

$user = $_POST["usuario"];
$passwd = $_POST["senha"];


$stmt = $pdo->prepare("INSERT INTO usuario (usuario, senha) VALUES (:user, :passwd)");
$stmt->bindParam(':user', $user);
$stmt->bindParam(':passwd', $passwd);
$stmt->execute();