<?php

/* @var $this yii\web\View */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\grid\GridView;
$this->title = 'COOK MANN';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-sm-6 company-name"><span class="company-name-1">COOK</span> <span class="company-name-2">MANN</span></div>
            <div class="col-sm-6 phone">+38 048 7000 490</div>
        </div>
        <div class="row">
            <div class="col-sm-12 delivery">Доставка горячей еды по Одессе домой или в офис</div>
        </div>
        <div class="row">
            <div class="col-sm-12 discount">гарантирована скидка 10% на первый заказ</div>
        </div>
        <div class="row">
            <div class="phone-label">
                Введите Ваш номер
            </div>
        </div>
        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="col-sm-12">
                <?= $form->field($modelCallback, 'phone')->widget(\yii\widgets\MaskedInput::className(), [
                        'mask' => '+38 (999) 999-99-99', 'options'=>['class'=>'phone-input', 'placeholder' => ('+38 (___) ___-__-__')]])->label(false) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <?= Html::submitButton('Перезвоните мне', ['class' => 'btn-call-back', 'name' => 'callback-button']) ?>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
        <div class="row">
            <div class="col-sm-12 links">
                Оплата и Доставка
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 links">
                О нас
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 links">
                Зона доставки
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 links">
                Адрес
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 links">
                Поиск по сайту
            </div>
        </div>
        <div class="search-grid">
            <?= GridView::widget([
                'dataProvider' => $dataProviderMenu,
                'filterModel' => $searchModelMenu,
                'columns' => [
                    ['attribute' => 'caption','contentOptions' => ['class' => 'adminmenu']],
                ],
            ]); ?>
        </div>
        <div class="row">
            <div class="col-sm-12 cart">Мой заказ</div>
        </div>
        <div class="cart-window">
            <div class="fatimes"><img src="../web/images/fatimesicon.png" alt="Close"></div>
            <div class="cart-header">Мой заказ</div>
            <?php $form = ActiveForm::begin(); ?>
            <div class="cart-content"></div>
            <div class="total-sum">Посчитать: <span class="money"></span> грн</div>
            <?= $form->field($modelOrder, 'meal')->hiddenInput(['id' => 'meal', 'readonly' => 'true'])->label(false); ?>
            <div class="input1">
                <?= $form->field($modelOrder, 'name')->
                textInput(['id' => 'name-order', 'class' => 'name-order', 'placeholder' => 'Введите Ваше Имя'])->label(false) ?>
            </div>
            <div class="input1">
                <?= $form->field($modelOrder, 'phone')->widget(\yii\widgets\MaskedInput::className(), [
                    'mask' => '+38 (999) 999-99-99', 'options'=>['class'=>'phone-order', 'placeholder' => ('+38 (___) ___-__-__')]])->label('Введите Ваш номер') ?>
            </div>
            <div class="input1">
                <?= $form->field($modelOrder, 'email')->
                textInput(['id' => 'email', 'class' => 'email-input', 'placeholder' => 'Введите Ваш email'])->label(false) ?>
            </div>
            <div class="input1">
                <?= $form->field($modelOrder, 'address')->
                textInput(['id' => 'address', 'class' => 'address-input', 'placeholder' => 'Введите Ваш адрес'])->label(false) ?>
            </div>
            <div class="input1">
                <?= $form->field($modelOrder, 'comment')->
                textInput(['id' => 'comment', 'class' => 'comment-input', 'placeholder' => 'Введите Ваш комментарий'])->label(false) ?>
            </div>
            <div class="question">Вы даете согласие на перезвон после заказа и дать фидбек по сервису/еде?</div>
            <div class="check-active-line"><span class="check-active">Активная</span><img src="../web/images/checkmarkempty.png" class="active-checkbox" alt="Активная"></div>
            <?= $form->field($modelOrder, 'active')->hiddenInput(['id' => 'active', 'readonly' => 'true', 'value' => '0'])->label(false); ?>
            <div class="input1">
                <div class="form-group">
                    <?= Html::submitButton('Заказать', ['class' => 'btn-order', 'name' => 'order-button']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
        <div class="grid-container">
        <?php
            for ($i = 0; $i < count($menu); $i++) {
                $j = $i+1;
                echo '<div class="grid-item">';
                echo    '<div class="meal-name" id="meal-name' . $j . '">' . $j . '. ' . $menu[$i]->caption . '</div>';
                echo    '<div class="meal-description">' . $menu[$i]->description . '</div>';
                echo    '<div class="weight">' . $menu[$i]->weight . ' г</div>';
                echo    '<div class="price" id="price' . $j . '">' . $menu[$i]->price . ' грн</div>';
                echo    '<div class="btn-buy">';
                echo        '<img src="../web/images/buy-button.png" id="meal' . $j . '" alt="Купить">';
                echo        '<img src="../web/images/checkmark.png" id="meal-to-cart' . $j . '" style="display: none" alt="Добавлено в корзину">';
                echo        '<img src="../web/images/fatimesicon.png" id="meal' . $j . '-fatimes" style="display: none" alt="Удалить с корзины">';
                echo    '</div>';
                echo    '<div><img src="../web/images/' . $menu[$i]->picture . '" id="meal-pic' . $j . '" alt="' . $menu[$i]->alt . '" class="picture-meal"></div>';
                echo '</div>';
            }
        ?>
        </div>
    </div>
</div>
