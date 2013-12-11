<?php
/* @var $this MissaoController */
/* @var $model Missao */
$model->iniciaMissao();

?>

<div id="missao">
    <div id="missao-header">
        <h1>Missões</h1>
    </div>
    <div id="missao-body">
            <div class="missao-content">
                <img src="<?php echo Yii::app()->request->baseUrl.'/assets/web/img/Summerhall.jpg' ?>" width="100" height="100">
                <label>Missão "<?php echo $model->nome_missao ?>" em andamento!</label>
                <label id="btn"><a href="<?php echo Yii::app()->request->baseUrl.'/missao' ?>"><button>Atualizar</button></a></label>
            </div>
    </div>
</div>