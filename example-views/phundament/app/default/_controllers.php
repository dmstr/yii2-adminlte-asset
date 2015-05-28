<?php
use yii\helpers\Inflector;

?>

<div class="row">

    <?php
    $lastIndexChar = '.';
    $xfavourites    = ($favourites)?:[
        'default' => 'black',
    ];

    foreach (\Yii::$app->getModule('admin')->getControllers($this->context->module->id) as $i => $controller):
        ?>

        <?php

        $className = 'app\models\\' . Inflector::id2camel($controller);
        $indexChar = substr($controller, 0, 1);
        if ($indexChar != $lastIndexChar) {
            #echo "<div class='clearfix'></div>";
            $lastIndexChar = $indexChar;
        }
        $count = class_exists($className) ? $className::find([])->asArray()->count() : '-';
        $color = (array_key_exists($controller, $favourites)) ? $favourites[$controller] : 'gray';
        ?>

        <div class="col-sm-4 col-lg-3">
            <div class="small-box bg-<?= $color ?>">
                <div class="inner">
                    <h3>
                        <?= $count ?>
                    </h3>

                    <p>
                        <?= Inflector::camel2words(
                            Inflector::id2camel($controller)
                        ) ?><?= $updated ?>&nbsp;
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-grid"></i>
                </div>
                <?php
                echo yii\helpers\Html::a(
                    'List <i class="fa fa-arrow-circle-right"></i>',
                    ["/{$this->context->module->id}/$controller"],
                    ['class' => 'small-box-footer']
                );
                ?>
            </div>
        </div>

    <?php endforeach; ?>
</div>
