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
        'items' =>'<li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 4 messages</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li><!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle"
                                                 alt="User Image"/>
                                        </div>
                                        <h4>
                                            Support Team
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                                <li>
        ',
        'linkOptions' => ['data-method' => 'post']

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