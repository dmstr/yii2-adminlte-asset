<?php
/** @var \yii\web\View $this */
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <?= \yii\helpers\Html::a(getenv('APP_TITLE'), Yii::$app->homeUrl, ['class' => 'brand-link']) ?>
    <div class="sidebar">
        <nav class="mt-2">
            <?php

            // prepare menu items, get all modules
            $menuItems = [];

            $favouriteMenuItems[] = ['label' => 'MAIN NAVIGATION', 'header' => true];


            $developerMenuItems = [];
            $developerMenuItems[] = [
                'url' => ['/sub/action/one'],
                'icon' => 'cog',
                'label' => 'Sub 1',
            ];
            $developerMenuItems[] = [
                'icon' => 'cog',
                'label' => 'No Link',
            ];
            $developerMenuItems[] = [
                'icon' => 'cog',
                'label' => 'Not visible',
                'visible' => false,
            ];
            $developerMenuItems[] = [
                'icon' => 'cog',
                'label' => 'Folder',
                'items' => [
                    [
                        'url' => ['/sub/action/two'],
                        'icon' => 'cog',
                        'label' => 'SubSub 2',
                    ],
                ],
            ];
            $developerMenuItems[] = [
                'url' => ['/sub/action/three'],
                'icon' => 'cog',
                'label' => 'Sub 3',
            ];
            $developerMenuItems[] = [
                'url' => ['/sub/action/param', 'id' => 'a'],
                'icon' => 'cog',
                'label' => 'Param A',
            ];
            $developerMenuItems[] = [
                'url' => ['/sub/action/param', 'id' => 'b'],
                'icon' => 'cog',
                'label' => 'Param B',
            ];


            $menuItems[] = [
                'url' => ['/test'],
                'icon' => 'cog',
                'label' => 'Test',
            ];

            $menuItems[] = [
                #'url' => '#',
                'icon' => 'cog',
                'label' => 'Test with items',
                'items' => $developerMenuItems,
            ];

            for ($i = 0; $i < 25; $i++) {
                $menuItems[] = [
                    'url' => ['/test/auto', 'id' => $i],
                    'icon' => 'cog',
                    'label' => 'Auto '.$i,
                ];
            }

            echo \dmstr\adminlte\widgets\Menu::widget([
                'items' => \yii\helpers\ArrayHelper::merge($favouriteMenuItems, $menuItems)
            ]);
            ?>
        </nav>
    </div>
</aside>
