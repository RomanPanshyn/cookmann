<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CookmannOrder */

$this->title = 'Обновить заказ: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cookmann Заказы', 'url' => ['admin']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['vieworder', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="cookmann-order-update updatemenu">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formorder', [
        'model' => $model,
    ]) ?>

</div>
