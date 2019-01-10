<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CookmannCallback */

$this->title = 'Обновить элемент перезвнить: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cookmann Перезвонить', 'url' => ['admin']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['viewcallback', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="cookmann-callback-update updatemenu">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formcallback', [
        'model' => $model,
    ]) ?>

</div>
