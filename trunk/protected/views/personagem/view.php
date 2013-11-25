<?php
/* @var $this PersonagemController */
/* @var $model Personagem */

?>
<!--PERSONAGEM-->
<div id="person">
    <div id="person-header">
        <h1>Personagem</h1>
    </div>
    <div id="person-body">
        <table>
            <tr>
                <td class="player">
                    <label>Personagem: <?php echo $model->nome_personagem; ?></label>

                    <img src="<?php echo Yii::app()->request->baseUrl.'/assets/web/img/casa/'.$model->id_casa.'b.jpg'; ?>"><br>
                </td>
                <td rowspan="2"><img src="<?php echo Yii::app()->request->baseUrl.'/assets/web/img/casa/'.$model->id_casa.'.png'; ?>" width="60" height="60"></td>
                <td rowspan="2"><img src="<?php echo Yii::app()->request->baseUrl.'/assets/web/img/mentor/'.$model->id_mentor.'.jpg'; ?>" width="170" height="250"></td>
            </tr>
            <tr>
                <td>
                    <p><label class="status">Level: <?php echo $model->id_level; ?></label>
                    <progress max="49" value="<?php echo $model->id_level; ?>" class="yellow"></progress></p>
                    <p><label class="status">XP: <?php echo $model->xp_personagem; ?>/<?php echo $model->idLevel->min_xp; ?></label>
                    <progress max="<?php echo $model->idLevel->min_xp; ?>" value="<?php echo $model->xp_personagem; ?>" class="purple"></progress></p>
                    <br>
                    <label class="status">Força: <?php echo $model->forca_personagem; ?></label>
                    <progress max="99" value="<?php echo $model->forca_personagem; ?>" class="orange"></progress>
                    <label class="status">Inteligência: <?php echo $model->inteligencia_personagem; ?></label>
                    <progress max="99" value="<?php echo $model->inteligencia_personagem; ?>" class="blue"></progress>
                    <label class="status">Vitalidade: <?php echo $model->vitalidade_personagem; ?></label>
                    <progress max="99" value="<?php echo $model->vitalidade_personagem; ?>" class="red"></progress>
                    <label class="status">Agilidade: <?php echo $model->agilidade_personagem; ?></label>
                    <progress max="99" value="<?php echo $model->agilidade_personagem; ?>" class="green"></progress>
                    <label class="status">Defesa: <?php echo $model->defesa_personagem; ?></label>
                    <progress max="99" value="<?php echo $model->defesa_personagem; ?>" class="yellow"></progress>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/web/img/mercado.jpg" style="margin:10px 0px 5px 0px;"><br>
                    <label id="gold">Gold atual: <?php echo $model->gold_personagem; ?></label>
                    <a href="javascript:void(0)"><button>Ir para o Mercado*</button></a>
                </td>
            </tr>
        </table>
    </div>
</div><!--FIM PERSONAGEM-->