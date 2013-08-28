<?php
// Conexão com o banco
$server = "127.0.0.1";
$db = "GOT";
$user = "postgres";
$pass = "tccgot";
$dbcon = new PDO("pgsql:host={$server};dbname={$db}", $user, $pass);

$dados_usuario = array(
    ":nome" => $_POST['nome'],
    ":login" => $_POST['login'],
    ":passwd" => $_POST['passwd'],
    ":status" => 1,
    ":tipo" => 'u'
);


$criar_usuario = $dbcon->prepare('INSERT INTO usuario VALUES (:nome, :login, :passwd, :status, :tipo');
$criar_usuario->execute($dados_usuario);
echo "<h1>Usuario '{$dados_usuario[:login]}' cadastrado!</h1>"

// Fecha conexão com o banco
$dbcon = null;
?>