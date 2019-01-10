<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CookmannMenu */

$this->title = 'Создать элемент меню';
$this->params['breadcrumbs'][] = ['label' => 'Cookmann Меню', 'url' => ['admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cookmann-menu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formmenu', [
        'model' => $model,
    ]) ?>

</div>
