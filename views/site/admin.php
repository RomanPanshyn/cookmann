<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'COOK MANN admin';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-index">
    <div class="body-content admin">
        <div>
            <?php echo Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton('Выйти', ['class' => 'btn btn-lg btn-success',
            'style' => ['margin' => '10px', 'padding' => '10px', 'font-size' => '18px']])
            . Html::endForm()
            ?>
        </div>
        <h1>COOKMANN Меню</h1>
        <p>
            <?= Html::a('Создать элемент меню', ['createmenu'], ['class' => 'btn btn-success']) ?>
        </p>

        <?= GridView::widget([
            'dataProvider' => $dataProviderMenu,
            'filterModel' => $searchModelMenu,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn','contentOptions' => ['class' => 'adminmenu']],

                ['attribute' => 'id','contentOptions' => ['class' => 'adminmenu']],
                ['attribute' => 'caption','contentOptions' => ['class' => 'adminmenu']],
                ['attribute' => 'description','contentOptions' => ['class' => 'adminmenu']],
                ['attribute' => 'weight','contentOptions' => ['class' => 'adminmenu']],
                ['attribute' => 'price','contentOptions' => ['class' => 'adminmenu']],
                ['attribute' => 'picture','contentOptions' => ['class' => 'adminmenu']],
                ['attribute' => 'alt','contentOptions' => ['class' => 'adminmenu']],

                ['class' => 'yii\grid\ActionColumn','contentOptions' => ['class' => 'adminmenu'],
                    'template' => '{viewmenu} {updatemenu} {deletemenu}',
                    'buttons' => [
                        'viewmenu' => function ($url,$model) {
                            return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                'title' => Yii::t('yii', 'Просмотр'),
                            ]);
                        },
                        'updatemenu' => function ($url,$model) {
                            return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                                'title' => Yii::t('yii', 'Редактировать'),
                            ]);
                        },
                        'deletemenu' => function ($url,$model) {
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                'title' => Yii::t('yii', 'Удалить'),
                                'data-confirm' => Yii::t('yii', 'Вы уверены, что хотите удалить этот элемент меню?'),
                                'data-method' => 'post',
                            ]);
                        },
                    ],
                ],
            ],
        ]); ?>

        <h1>COOKMANN Перезвонить</h1>
        <p>
            <?= Html::a('Создать элемент перезвонить', ['createcallback'], ['class' => 'btn btn-success']) ?>
        </p>

        <?= GridView::widget([
            'dataProvider' => $dataProviderCallback,
            'filterModel' => $searchModelCallback,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn','contentOptions' => ['class' => 'adminmenu']],

                ['attribute' => 'id','contentOptions' => ['class' => 'adminmenu']],
                ['attribute' => 'phone','contentOptions' => ['class' => 'adminmenu']],
                ['attribute' => 'description','contentOptions' => ['class' => 'adminmenu']],

                ['class' => 'yii\grid\ActionColumn','contentOptions' => ['class' => 'adminmenu'],
                    'template' => '{viewcallback} {updatecallback} {deletecallback}',
                    'buttons' => [
                        'viewcallback' => function ($url,$model) {
                            return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                'title' => Yii::t('yii', 'Просмотр'),
                            ]);
                        },
                        'updatecallback' => function ($url,$model) {
                            return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                                'title' => Yii::t('yii', 'Редактировать'),
                            ]);
                        },
                        'deletecallback' => function ($url,$model) {
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                'title' => Yii::t('yii', 'Удалить'),
                                'data-confirm' => Yii::t('yii', 'Вы уверены, что хотите удалить этот элемент перезвонить?'),
                                'data-method' => 'post',
                            ]);
                        },
                    ],
                ],
            ],
        ]); ?>

        <h1>COOKMANN Заказы</h1>
        <p>
            <?= Html::a('Создать заказ', ['createorder'], ['class' => 'btn btn-success']) ?>
        </p>

        <?= GridView::widget([
            'dataProvider' => $dataProviderOrder,
            'filterModel' => $searchModelOrder,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn','contentOptions' => ['class' => 'adminmenu']],

                ['attribute' => 'id','contentOptions' => ['class' => 'adminmenu']],
                ['attribute' => 'meal','contentOptions' => ['class' => 'adminmenu']],
                ['attribute' => 'name','contentOptions' => ['class' => 'adminmenu']],
                ['attribute' => 'phone','contentOptions' => ['class' => 'adminmenu']],
                ['attribute' => 'email','contentOptions' => ['class' => 'adminmenu']],
                ['attribute' => 'address','contentOptions' => ['class' => 'adminmenu']],
                ['attribute' => 'comment','contentOptions' => ['class' => 'adminmenu']],
                ['attribute' => 'active','contentOptions' => ['class' => 'adminmenu']],

                ['class' => 'yii\grid\ActionColumn','contentOptions' => ['class' => 'adminmenu'],
                    'template' => '{vieworder} {updateorder} {deleteorder}',
                    'buttons' => [
                        'vieworder' => function ($url,$model) {
                            return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                'title' => Yii::t('yii', 'Просмотр'),
                            ]);
                        },
                        'updateorder' => function ($url,$model) {
                            return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                                'title' => Yii::t('yii', 'Редактировать'),
                            ]);
                        },
                        'deleteorder' => function ($url,$model) {
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                'title' => Yii::t('yii', 'Удалить'),
                                'data-confirm' => Yii::t('yii', 'Вы уверены, что хотите удалить этот заказ?'),
                                'data-method' => 'post',
                            ]);
                        },
                    ],
                ],
            ],
        ]); ?>
    </div>
</div>
