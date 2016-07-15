<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Jeneline Rodriguez</p>


            </div>
            <a href="#"><i class="fa fa-circle text-success"></i>Owner</a>
        </div>

        <!-- search form
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

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'About Me', 'options' => ['class' => 'header']],
                //    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
              //      ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
               //     ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Contact Detail',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => '63xxxxx', 'icon' => 'fa fa-file-code-o',],
                            ['label' => '63xxxxx', 'icon' => 'fa fa-dashboard',],
                            [
                              /*  'label' => 'Level One',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'fa fa-circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],*/
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
