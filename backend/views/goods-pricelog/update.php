<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\GoodsPriceLog */

$this->title = '修改: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => '价格变动日志', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="goods-price-log-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
