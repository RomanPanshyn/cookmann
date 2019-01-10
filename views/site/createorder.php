<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CookmannOrder */

$this->title = 'Создать Cookmann Заказ';
$this->params['breadcrumbs'][] = ['label' => 'Cookmann Заказы', 'url' => ['admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cookmann-order-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formorder', [
        'model' => $model,
    ]) ?>

</div>
