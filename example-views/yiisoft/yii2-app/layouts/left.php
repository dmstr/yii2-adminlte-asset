<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget([
            'encodeLabels' => false,
            'options' => ['class' => 'sidebar-menu'],
            'submenuTemplate' => '<ul class="treeview-menu">{items}</ul>',
            'items' => [
                ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                ['label' => '<i class="fa fa-file-code-o"></i><span>Gii</span>', 'url' => ['/gii']],
                ['label' => '<i class="fa fa-dashboard"></i><span>Debug</span>', 'url' => ['/debug']],
                ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                [
                    'label' => '<i class="fa fa-share"></i><span>Same tools</span>',
                    'url' => '#',
                    'items' => [
                        [
                            'label' => '<i class="fa fa-file-code-o"></i><span>Gii</span>',
                            'url' => ['/gii'],
                        ],
                        [
                            'label' => '<i class="fa fa-dashboard"></i><span>Debug</span>',
                            'url' => ['/debug'],
                        ],
                        [
                            'label' => '<i class="fa fa-circle-o"></i> Level One ',
                            'url' => '#',
                            'items' => [
                                [
                                    'label' => '<i class="fa fa-circle-o"></i> Level Two</a>',
                                    'url' => '#',
                                ],
                                [
                                    'label' => '<i class="fa fa-circle-o"></i> Level Two ',
                                    'url' => '#',
                                    'items' => [
                                        [
                                            'label' => '<i class="fa fa-circle-o"></i> Level Three</a>',
                                            'url' => '#',
                                        ],
                                        [
                                            'label' => '<i class="fa fa-circle-o"></i> Level Three</a>',
                                            'url' => '#',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ]) ?>

    </section>

</aside>
