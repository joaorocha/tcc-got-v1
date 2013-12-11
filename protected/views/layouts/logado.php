<?php $controle = '
<!--PAINEL DE CONTROLE-->
<div id="painel">
    <ul class="painelLat">
        <li><h2>Painel</h2></li>
        <li><a href="'.Yii::app()->request->baseUrl.'/site/logout">Sair</a></li>
        <li><a href="'.Yii::app()->request->baseUrl.'/personagem/'.Yii::app()->user->id.'">Personagem</a></li>
        <li><a href="'.Yii::app()->request->baseUrl.'/item">Mercado</a></li>
        <li><a href="'.Yii::app()->request->baseUrl.'/missao">Missões</a></li>
        <li><a href="javascript:void(0)">Regras*</a></li>
        <li><a href="javascript:void(0)">F.A.Q*</a></li>
    </ul>
</div><!--FIM PAINEL DE CONTROLE-->
'; ?>