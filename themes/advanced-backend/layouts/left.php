<?php
use yii\bootstrap\Nav;

?>
<aside class="left-side sidebar-offcanvas">

    <section class="sidebar">

        <?php if (!Yii::$app->user->isGuest) : ?>
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?= $directoryAsset ?>/img/avatar5.png" class="img-circle" alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p>Hello, <?= @Yii::$app->user->identity->username ?></p>
                    <a href="<?= $directoryAsset ?>/#">
                        <i class="fa fa-circle text-success"></i> Online
                    </a>
                </div>
            </div>
        <?php endif ?>

        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i
                                        class="fa fa-search"></i></button>
                            </span>
            </div>
        </form>

        <?=
        Nav::widget(
            [
                'encodeLabels' => false,
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    [
                        'label' => '<span class="fa fa-angle-down"></span><span class="text-info">Menu Yii2</span>',
                        'url' => '#'
                    ],
                    ['label' => '<span class="fa fa-file-code-o"></span> Gii', 'url' => ['/gii']],
                    ['label' => '<span class="fa fa-dashboard"></span> Debug', 'url' => ['/debug']],
                ],
            ]
        );
        ?>

        <!-- You can delete next ul.sidebar-menu. It's just demo. -->

        <ul class="sidebar-menu">
            <li>
                <a href="#" class="navbar-link">
                    <i class="fa fa-angle-down"></i> <span class="text-info">Menu AdminLTE</span>
                </a>
            </li>
            <li class="active">
                <a href="<?= $directoryAsset ?>/index.html">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="<?= $directoryAsset ?>/pages/widgets.html">
                    <i class="fa fa-th"></i> <span>Widgets</span>
                    <small class="badge pull-right bg-green">new</small>
                </a>
            </li>
            <li class="treeview">
                <a href="<?= $directoryAsset ?>/#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Charts</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= $directoryAsset ?>/pages/charts/morris.html"><i
                                class="fa fa-angle-double-right"></i> Morris</a></li>
                    <li><a href="<?= $directoryAsset ?>/pages/charts/flot.html"><i class="fa fa-angle-double-right"></i>
                            Flot</a></li>
                    <li><a href="<?= $directoryAsset ?>/pages/charts/inline.html"><i
                                class="fa fa-angle-double-right"></i> Inline charts</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="<?= $directoryAsset ?>/#">
                    <i class="fa fa-laptop"></i>
                    <span>UI Elements</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= $directoryAsset ?>/pages/UI/general.html"><i class="fa fa-angle-double-right"></i>
                            General</a></li>
                    <li><a href="<?= $directoryAsset ?>/pages/UI/icons.html"><i class="fa fa-angle-double-right"></i>
                            Icons</a></li>
                    <li><a href="<?= $directoryAsset ?>/pages/UI/buttons.html"><i class="fa fa-angle-double-right"></i>
                            Buttons</a></li>
                    <li><a href="<?= $directoryAsset ?>/pages/UI/sliders.html"><i class="fa fa-angle-double-right"></i>
                            Sliders</a></li>
                    <li><a href="<?= $directoryAsset ?>/pages/UI/timeline.html"><i class="fa fa-angle-double-right"></i>
                            Timeline</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="<?= $directoryAsset ?>/#">
                    <i class="fa fa-edit"></i> <span>Forms</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= $directoryAsset ?>/pages/forms/general.html"><i
                                class="fa fa-angle-double-right"></i> General Elements</a>
                    </li>
                    <li><a href="<?= $directoryAsset ?>/pages/forms/advanced.html"><i
                                class="fa fa-angle-double-right"></i> Advanced
                            Elements</a></li>
                    <li><a href="<?= $directoryAsset ?>/pages/forms/editors.html"><i
                                class="fa fa-angle-double-right"></i> Editors</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="<?= $directoryAsset ?>/#">
                    <i class="fa fa-table"></i> <span>Tables</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= $directoryAsset ?>/pages/tables/simple.html"><i
                                class="fa fa-angle-double-right"></i> Simple tables</a>
                    </li>
                    <li><a href="<?= $directoryAsset ?>/pages/tables/data.html"><i class="fa fa-angle-double-right"></i>
                            Data tables</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= $directoryAsset ?>/pages/calendar.html">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <small class="badge pull-right bg-red">3</small>
                </a>
            </li>
            <li>
                <a href="<?= $directoryAsset ?>/pages/mailbox.html">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <small class="badge pull-right bg-yellow">12</small>
                </a>
            </li>
            <li class="treeview">
                <a href="<?= $directoryAsset ?>/#">
                    <i class="fa fa-folder"></i> <span>Examples</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?= $directoryAsset ?>/pages/examples/invoice.html">
                            <i class="fa fa-angle-double-right"></i> Invoice</a>
                    </li>
                    <li>
                        <a href="<?= $directoryAsset ?>/pages/examples/login.html"><i
                                class="fa fa-angle-double-right"></i> Login</a>
                    </li>
                    <li><a href="<?= $directoryAsset ?>/pages/examples/register.html"><i
                                class="fa fa-angle-double-right"></i> Register</a>
                    </li>
                    <li><a href="<?= $directoryAsset ?>/pages/examples/lockscreen.html"><i
                                class="fa fa-angle-double-right"></i> Lockscreen</a>
                    </li>
                    <li><a href="<?= $directoryAsset ?>/pages/examples/404.html"><i
                                class="fa fa-angle-double-right"></i> 404 Error</a></li>
                    <li><a href="<?= $directoryAsset ?>/pages/examples/500.html"><i
                                class="fa fa-angle-double-right"></i> 500 Error</a></li>
                    <li><a href="<?= $directoryAsset ?>/pages/examples/blank.html"><i
                                class="fa fa-angle-double-right"></i> Blank Page</a></li>
                </ul>
            </li>
        </ul>

    </section>

</aside>
