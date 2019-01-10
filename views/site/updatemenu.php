<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CookmannMenu */

$this->title = 'Обновить элемент меню: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cookmann Меню', 'url' => ['admin']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['viewmenu', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="cookmann-menu-update updatemenu">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formmenu', [
        'model' => $model,
    ]) ?>

</div>
