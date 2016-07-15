<?php
use yii\helpers\Html;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?php // Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">


            <?php
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            }else {
                $menuItems[] = [
                    'label' => 'Logout ('. ' ' .Html::img('http://graph.facebook.com/'.Yii::$app->user->identity->profilepic.'/picture', ['class'=>'img-circle']) .' '. Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo $menuItems;
            ?>
                <!-- Messages: style can be found in dropdown.less-->

            </div>
    </nav>
</header>
