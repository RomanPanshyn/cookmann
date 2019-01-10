<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CookmannMenuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cookmann-menu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'caption') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'weight') ?>

    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'picture') ?>

    <?= $form->field($model, 'alt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
