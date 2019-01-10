<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CookmannOrder */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cookmann Заказы', 'url' => ['admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cookmann-order-view viewmenu">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['updateorder', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['deleteorder', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот заказ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            ['attribute' => 'id','captionOptions' => ['class' => 'adminmenu'],'contentOptions' => ['class' => 'adminmenu']],
            ['attribute' => 'meal','captionOptions' => ['class' => 'adminmenu'],'contentOptions' => ['class' => 'adminmenu']],
            ['attribute' => 'name','captionOptions' => ['class' => 'adminmenu'],'contentOptions' => ['class' => 'adminmenu']],
            ['attribute' => 'phone','captionOptions' => ['class' => 'adminmenu'],'contentOptions' => ['class' => 'adminmenu']],
            ['attribute' => 'email','captionOptions' => ['class' => 'adminmenu'],'contentOptions' => ['class' => 'adminmenu']],
            ['attribute' => 'address','captionOptions' => ['class' => 'adminmenu'],'contentOptions' => ['class' => 'adminmenu']],
            ['attribute' => 'comment','captionOptions' => ['class' => 'adminmenu'],'contentOptions' => ['class' => 'adminmenu']],
            ['attribute' => 'active','captionOptions' => ['class' => 'adminmenu'],'contentOptions' => ['class' => 'adminmenu']],
        ],
    ]) ?>

</div>
