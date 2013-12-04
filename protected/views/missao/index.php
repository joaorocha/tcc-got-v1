<?php
/* @var $this MissaoController */
/* @var $dataProvider CActiveDataProvider */
?>

<!--MISSÃO-->
<div id="missao">
    <div id="missao-header">
        <h1>Missões</h1>
    </div>
    <div id="missao-body">
        <?php foreach(Missao::model()->findAll() as $missao): ?>
            <div class="missao-content">
                <img src="<?php echo Yii::app()->request->baseUrl.'/assets/web/img/Summerhall.jpg' ?>" width="100" height="100">
                <p>Nome: <?php echo $missao->nome_missao ?></p>
                <p>Descrição: <?php echo $missao->descricao_missao ?></p>
                <label>Tempo de execução: <?php echo gmdate("H\h \e i\m", $missao->duracao_missao) ?></label>
                <label id="btn"><a href="<?php echo Yii::app()->request->baseUrl.'/mlssao' ?>"><button>Realizar missão*</button></a></label>
            </div>
        <?php endforeach ?>
    </div>
</div>
<!--FIM MISSÃO-->
