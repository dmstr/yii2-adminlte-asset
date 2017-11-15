<?php

use yii\helpers\Inflector;

$favourites = ($favourites) ?: [];

// Note: requires `$controllers` variable during rendering...

?>

<div class="row">

    <?php foreach ($favourites as $i => $controller): ?>

        <div class="col-xs-6 col-sm-4 col-lg-3">
            <?=
            insolita\wgadminlte\SmallBox::widget(
                [
                    'head'        => $controller['head'],
                    'type'        => $controller['color'],
                    'text'        => $controller['label'],
                    'footer'      => 'Manage',
                    'footer_link' => $controller['route'],
                    'icon'        => $controller['icon']
                ]
            );
            ?>
        </div>
    <?php endforeach; ?>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <ul class="list-group">
                    <?php
                    $dataProvider = new \yii\data\ArrayDataProvider(
                        [
                            'allModels'  => $controllers,
                            'pagination' => [
                                'pageSize' => 100
                            ]
                        ]
                    );
                    echo \yii\widgets\ListView::widget(
                        [
                            'dataProvider' => $dataProvider,
                            'itemView'     => function ($data) {
                                return '<li class="list-group-item">' . \yii\helpers\Html::a(
                                    $data['label'],
                                    $data['route']
                                ) . '</li>';
                            },
                        ]
                    );
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
