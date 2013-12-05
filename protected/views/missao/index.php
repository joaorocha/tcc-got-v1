<?php
/* @var $this MissaoController */
/* @var $dataProvider CActiveDataProvider */
$agora = new DateTime();
$fim_missao = new DateTime('15:10:00');
$faltam = $fim_missao->diff($agora);
$timeleft = $faltam->format("%h:%i:%s");
$emmissao = ($agora < $fim_missao) ? true : false ;
?>

<!--MISSÃO-->
<div id="missao">
    <div id="missao-header">
        <h1>Missões</h1>
    </div>
    <div id="missao-body">
        <?php if ($emmissao){ ?>
            <div class="missao-content">
                <img src="<?php echo Yii::app()->request->baseUrl.'/assets/web/img/Summerhall.jpg' ?>" width="100" height="100">
                <label>Missão em andamento! Volte em <?php echo $timeleft ?></label>
                <label id="btn"><a href="<?php echo Yii::app()->request->baseUrl.'/missao' ?>"><button>Atualizar</button></a></label>
            </div>
        <?php }else{ ?>
        <?php foreach(Missao::model()->findAll() as $missao): ?>
            <div class="missao-content">
                <img src="<?php echo Yii::app()->request->baseUrl.'/assets/web/img/Summerhall.jpg' ?>" width="100" height="100">
                <p>Nome: <?php echo $missao->nome_missao ?></p>
                <p>Descrição: <?php echo $missao->descricao_missao ?></p>
                <p>Recompensa em gold: Entre <?php echo $missao->min_gold_missao.' e '. $missao->max_gold_missao?></p>
                <p>Recompensa em XP: Entre <?php echo $missao->min_xp_missao.' e '. $missao->max_xp_missao?></p>
                <label>Tempo de execução: <?php echo gmdate("H:i:s", $missao->duracao_missao) ?></label>
                <label id="btn"><a href="<?php echo Yii::app()->request->baseUrl.'/missao/'.$missao->id_missao ?>"><button>Realizar missão</button></a></label>
            </div>
        <?php endforeach; } ?>
    </div>
</div>
<!--FIM MISSÃO-->