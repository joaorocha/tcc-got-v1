<?php
/* @var $this MissaoController */
/* @var $model Missao */
$dbcon = new PDO('pgsql:host=localhost;dbname=got', 'got', 'got');
$usuario = Yii::app()->user->id;
$xp = 4;
$gold = 540;


$sql = "UPDATE personagem
        SET xp_personagem=?, gold_personagem=?
        WHERE id_personagem=?";
$q = $dbcon->prepare($sql);
$q->execute(array($xp,$gold,$usuario));

?>

<div id="missao">
    <div id="missao-header">
        <h1>Missões</h1>
    </div>
    <div id="missao-body">
            <div class="missao-content">
                <img src="<?php echo Yii::app()->request->baseUrl.'/assets/web/img/Summerhall.jpg' ?>" width="100" height="100">
                <label>Missão "<?php echo $model->nome_missao ?>" em andamento!</label>
                <label id="btn"><a href="<?php echo Yii::app()->request->baseUrl.'/missa0/1' ?>"><button>Atualizar</button></a></label>
            </div>
    </div>
</div>