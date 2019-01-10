<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CookmannCallback */

$this->title = 'Создать Cookmann Перезвонить';
$this->params['breadcrumbs'][] = ['label' => 'Cookmann Перезвонить', 'url' => ['admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cookmann-callback-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formcallback', [
        'model' => $model,
    ]) ?>

</div>
