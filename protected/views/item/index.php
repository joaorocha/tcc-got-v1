<?php
/* @var $this ItemController */
/* @var $dataProvider CActiveDataProvider */
?>

    <!--MERCADO-->
    <div id="mercado">
        <div id="mercado-header">
            <h1>Mercado</h1>
        </div>
        <div id="mercado-body">
            <table border="1">
                <th colspan="4">Itens disponíveis para compra</th>
                <tr>
                    <?php foreach(Item::model()->findAll() as $item): ?>
                        <td>
                            <a class="dcontexto">
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/web/img/<?php echo $item->id_item ?>.jpg">
                                <span>
                                    <?php echo $item->descricao_item ?>
                                </span>
                            </a>
                            <label>Valor: <?php echo $item->preco_item ?></label>
                            <a href="<?php echo Yii::app()->request->baseUrl.'/item/'.$item->id_item ?>"><button>Comprar</button></a>
                        </td>
                    <?php endforeach; ?>
                </tr>
            </table>
        </div>
    </div>
    <!--FIM MERCADO-->