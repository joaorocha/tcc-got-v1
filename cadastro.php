<?php
// Conexão com o banco
$server = "127.0.0.1";
$db = "got";
$user = "got";
$dbcon = new PDO("pgsql:host={$server};dbname={$db}", $user);


// Insere dados de cadastro em um array
$usuario[":nome_usuario"] = $_POST['nome'];
$usuario[":login_usuario"] = $_POST['login'];
$usuario[":passwd_usuario"] = $_POST['passwd'];
$usuario[":status_usuario"] = $_POST['status'];
$usuario[":tipo_usuario"] = $_POST['tipo'];


// Insere os dados no banco (provavelmente vai pro metodo)
$criar_usuario = $dbcon->prepare('INSERT INTO usuario (nome_usuario, login_usuario, passwd_usuario, status_usuario, tipo_usuario) VALUES (nome_usuario, login_usuario, passwd_usuario, status_usuario, tipo_usuario)');
$criar_usuario->execute($usuario);
echo "<html><body><h1>Usuario '{$usuario[":login"]}' cadastrado!</h1></body></html>";


// Fecha conexão com o banco
$dbcon = null;
?>