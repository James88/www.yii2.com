<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Video */

$this->title = '添加微课';
$this->params['breadcrumbs'][] = ['label' => '微课管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
