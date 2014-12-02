<?php
use yii\bootstrap\Nav;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */
$this->title = $this->title.' [Backend] '.Yii::$app->params['appName'];
dmstr\web\AdminLteAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Ionicons -->
    <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <!-- Theme style -->
    <?php $this->head() ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<?php $this->beginBody() ?>
<body class="skin-black">
<!-- header logo: style can be found in header.less -->
<header class="header">
    <a href="<?= \Yii::$app->homeUrl ?>" class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        Phundament 4
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <?php if (!\Yii::$app->user->isGuest): ?>

                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-warning"></i>
                            <span class="label label-warning">1</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 1 notification(s)</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="ion ion-ios7-people info"></i> Welcome to Phundament 4!
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--<li class="footer"><a href="#">View all</a></li>-->
                        </ul>
                    </li>

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i>
                            <span><?= \Yii::$app->user->identity->username ?> <i class="caret"></i></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <?php echo \cebe\gravatar\Gravatar::widget(
                                    [
                                        'email'   => \Yii::$app->user->identity->profile->gravatar_email,
                                        'options' => [
                                            'alt' => \Yii::$app->user->identity->username
                                        ],
                                        'size'    => 128
                                    ]
                                ); ?>
                                <p>
                                    <?= \Yii::$app->user->identity->username ?>
                                    <small><?= \Yii::$app->user->identity->email ?></small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?= \yii\helpers\Url::to(['/user/settings/profile']) ?>"
                                       class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?= \yii\helpers\Url::to(['/user/security/logout']) ?>"
                                       class="btn btn-default btn-flat" data-method="post">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <?php if (!\Yii::$app->user->isGuest): ?>
                <div class="user-panel">
                    <div class="pull-left image">
                        <?php echo \cebe\gravatar\Gravatar::widget(
                            [
                                'email'   => \Yii::$app->user->identity->email,
                                'options' => [
                                    'alt' => \Yii::$app->user->identity->username
                                ],
                                'size'    => 64
                            ]
                        ); ?>
                    </div>
                    <div class="pull-left info">
                        <p><?= \Yii::$app->user->identity->username ?></p>

                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
            <?php endif; ?>
            <!-- search form -->
            <!--<form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                </div>
            </form>-->
            <!-- /.search form -->

            <?php
            if (!\Yii::$app->user->isGuest) {
                $menuItems = [
                    ['label' => '<i class="fa fa-dashboard"></i> <span>Dashboard</span>', 'url' => ['/site/index']],
                    ['label' => '<i class="fa fa-users"></i> <span>Users</span>', 'url' => ['/user/admin']],
                    ['label' => '<i class="fa fa-cubes"></i> <span>Packages</span>', 'url' => ['/packaii']],
                    ['label' => '<i class="fa fa-code"></i> <span>Code Generation</span>', 'url' => ['/gii']],
                ];
            } else {
                $menuItems = [];
            }

            // sidebar menu: : style can be found in sidebar.less
            echo Nav::widget(
                [
                    'options'      => ['class' => 'sidebar-menu'],
                    'items'        => $menuItems,
                    'encodeLabels' => false,
                ]
            );
            ?>

        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?= \yii\helpers\Inflector::camel2words(\yii\helpers\Inflector::id2camel($this->context->module->id)) ?>
                <small><?= ($this->context->module->id !== \Yii::$app->id)?'Module':'' ?></small>
            </h1>
            <?=
            Breadcrumbs::widget(
                [
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]
            ) ?>
        </section>

        <!-- Main content -->
        <section class="content">
            <?= Alert::widget() ?>
            <?= $content ?>
        </section>
        <!-- /.content -->
    </aside>
    <!-- /.right-side -->
</div>
<!-- ./wrapper -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
