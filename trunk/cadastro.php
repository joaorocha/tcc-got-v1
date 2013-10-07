<?php
// Conexão com o banco
$server = "127.0.0.1";
$db = "got";
$user = "got";
$dbcon = new PDO("pgsql:host={$server};dbname={$db}", $user);

$dados_usuario[":nome"] = $_POST['nome'];
$dados_usuario[":login"] = $_POST['login'];
$dados_usuario[":passwd"] = $_POST['passwd'];
$dados_usuario[":status"] = 1;
$dados_usuario[":tipo"] = 'u';


$criar_usuario = $dbcon->prepare('INSERT INTO usuario VALUES (:nome, :login, :passwd, :status, :tipo');
$criar_usuario->execute($dados_usuario);
echo "<html><body><h1>Usuario '{$dados_usuario[":login"]}' cadastrado!</h1></body></html>";

// Fecha conexão com o banco
$dbcon = null;
?>