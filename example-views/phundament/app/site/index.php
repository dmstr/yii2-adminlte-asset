<div class="row">
    <div class="col-md-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>
                    1
                </h3>

                <p>
                    Users
                </p>
            </div>
            <div class="icon">
                <i class="ion ion-person"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to(['/user/admin']) ?>" class="small-box-footer">
                Manage <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-md-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
            <div class="inner">
                <h3>
                    1
                </h3>

                <p>
                    Frontend Controllers
                </p>
            </div>
            <div class="icon">
                <i class="ion ion-home"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to('site/index') ?>" class="small-box-footer">
                Homepage <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-md-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>
                    <?= count(\Yii::$app->getModules()) ?>
                </h3>

                <p>
                    Modules
                </p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to(['/packaii']) ?>" class="small-box-footer">
                Browse Packages <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>

    </div>
    <!-- ./col -->

    <div class="col-md-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>
                    4.0.0-dev
                </h3>

                <p>
                    Version
                </p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to('http://phundament.com') ?>" target="_blank" class="small-box-footer">
                Phundament Online <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
</div>

<div class="row">
    <div class="col-sm-6">
        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Modules</h3>
            </div>
            <div class="box-body">
                <?php
                foreach (\Yii::$app->getModules() AS $name => $m) {
                    $module = \Yii::$app->getModule($name);
                    echo yii\helpers\Html::a(
                        $module->id,
                        ['/' . $module->id],
                        ['class' => 'btn btn-default btn-block btn-flat']
                    );
                }
                ?>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <small>Registered in application from configuration or bootstrapping.</small>
            </div>
            <!-- /.box-footer-->
        </div>
        <div class="callout callout-info">
            <h4>Prepare the test-suites!</h4>
            <p>Use <code>./yii app/setup-tests</code> to initialize codeception.</p>
        </div>
        <!-- /.box -->
    </div>

    <div class="col-sm-6">
        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Documentation</h3>
            </div>
            <div class="box-body">
                <div class="alert alert-warning">
                    <i class="fa fa-warning"></i>
                    <b>Notice!</b> Use <code>./yii app/setup-docs</code> and <code>./yii app/generate-docs</code> to create the HTML documentation for this application.
                </div>
                <p>

                    <?= yii\helpers\Html::a(
                        'Class Reference',
                        '../../docs-html/index.html',
                        ['target' => '_blank', 'class' => 'btn btn-default btn-block btn-flat']
                    ); ?>
                    <?= yii\helpers\Html::a(
                        'Developer Guide',
                        '../../docs-html/guide-README.html',
                        ['target' => '_blank', 'class' => 'btn btn-default btn-block btn-flat']
                    ); ?>
                    <?= yii\helpers\Html::a(
                        'User Guide',
                        'https://docs.google.com',
                        ['target' => '_blank', 'class' => 'btn btn-default btn-block btn-flat']
                    ); ?>

                </p>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <small>Need help? Get <?= yii\helpers\Html::a(
                        'support',
                        'mailto:' . \Yii::$app->params['supportEmail']
                    ); ?>.
                </small>
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->
    </div>
</div>
