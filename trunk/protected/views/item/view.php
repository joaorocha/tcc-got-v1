<?php
/* @var $this ItemController */
/* @var $model Item */


$dbcon = new PDO('pgsql:host=localhost;dbname=got', 'got', 'got');
$usuario = Yii::app()->user->id;

$query = $dbcon->prepare("SELECT * FROM personagem WHERE id_personagem=$usuario");
$query->execute();
$now = $query->fetch(PDO::FETCH_ASSOC);
$item = $model->id_item;
$gold = $now["gold_personagem"] - $model->preco_item;

$sql = "UPDATE personagem
        SET id_item=?, gold_personagem=?
        WHERE id_personagem=?";
$q = $dbcon->prepare($sql);
$q->execute(array($item, $gold, $usuario));
$this->redirect(Yii::app()->request->baseUrl.'/personagem/'.$usuario);
?>