<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CookmannMenu */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cookmann Меню', 'url' => ['admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cookmann-menu-view viewmenu">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['updatemenu', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['deletemenu', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот элемент меню?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            ['attribute' => 'id','captionOptions' => ['class' => 'adminmenu'],'contentOptions' => ['class' => 'adminmenu']],
            ['attribute' => 'caption','captionOptions' => ['class' => 'adminmenu'],'contentOptions' => ['class' => 'adminmenu']],
            ['attribute' => 'description','captionOptions' => ['class' => 'adminmenu'],'contentOptions' => ['class' => 'adminmenu']],
            ['attribute' => 'weight','captionOptions' => ['class' => 'adminmenu'],'contentOptions' => ['class' => 'adminmenu']],
            ['attribute' => 'price','captionOptions' => ['class' => 'adminmenu'],'contentOptions' => ['class' => 'adminmenu']],
            ['attribute' => 'picture','captionOptions' => ['class' => 'adminmenu'],'contentOptions' => ['class' => 'adminmenu']],
            ['attribute' => 'alt','captionOptions' => ['class' => 'adminmenu'],'contentOptions' => ['class' => 'adminmenu']],
        ],
    ]) ?>

</div>
