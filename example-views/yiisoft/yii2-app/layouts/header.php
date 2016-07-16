<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

<nav class="navbar navbar-static-top" role="navigation">

<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
</a>

<div class="navbar-custom-menu">
<!-- Messages: style can be found in dropdown.less-->
<?php
if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
    $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];


} else {
    $menuItems[] = [
        'label' => 'Logout ('. ' ' .Html::img('http://graph.facebook.com/'.Yii::$app->user->identity->profilepic.'/picture', ['class'=>'img-circle']) .' '. Yii::$app->user->identity->username . ')',
       // 'url' => ['/site/logout'],
     //   'linkOptions' => ['data-method' => 'post']

    ];
    $menuItems[] = [
        'label' => 'Settings',
        'items'=> [
            ['<li class="dropdown user user-menu">
 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
        <span class="hidden-xs">Alexander Pierce</span>
    </a>

</li>
'],


        ],

        // 'url' => ['/site/logout'],
      //  'linkOptions' => ['data-method' => 'post']

    ];

}

echo Nav::widget([
    'options' => ['class' => 'nav navbar-nav'],
    'items' => $menuItems,
    'encodeLabels' => false
]);

?>

<!-- User Account: style can be found in dropdown.less -->


</div>
</nav>
</header>