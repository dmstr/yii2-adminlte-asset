<div class="row">
    <div class="col-md-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
            <div class="inner">
                <h3>
                     <?= YII_ENV ?>
                </h3>

                <p>
                    Go to Frontend
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

    <?php if (Yii::$app->user->identity->isAdmin): ?>

        <div class="col-md-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>
                        <?= \dektrium\user\models\User::find()->count() ?>
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
            <div class="small-box bg-orange">
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
                <a href="<?= \yii\helpers\Url::to(['/debug']) ?>" class="small-box-footer">
                    Debug <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>

        </div>
        <!-- ./col -->

        <div class="col-md-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>
                        <?= getenv('APP_VERSION') ?>
                    </h3>

                    <p>
                        Version
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-grid"></i>
                </div>
                <a href="<?= \yii\helpers\Url::to('http://phundament.com') ?>" target="_blank" class="small-box-footer">
                    Phundament Online <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
    <?php endif; ?>

</div>

<div class="row">
    <div class="col-sm-12">
        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Languages</h3>
            </div>
            <div class="box-body">
                <?php
                foreach (\Yii::$app->urlManager->languages AS $name) {
                    echo yii\helpers\Html::a(
                        $name,
                        ['', \Yii::$app->urlManager->languageParam=>$name],
                        ['class' => 'btn btn-default btn-flat '.(Yii::$app->language == $name?'active':'')]
                    );
                }
                ?>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <small>Registered in <code>urlManager</code> application component.</small>
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->
    </div>

</div>


<?php if (Yii::$app->user->identity->isAdmin): ?>

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
                            ['class' => 'btn btn-default btn-flat']
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
            <!-- /.box -->
        </div>

        <div class="col-sm-6">
            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Documentation</h3>
                </div>
                <div class="box-body">
                    <div class="alert alert-info">
                        <i class="fa fa-warning"></i>
                        <b>Notice!</b> Use the <i>yii2-apidoc</i> extension to
                        create the HTML documentation for this application.
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
        </div>
    </div>

<?php endif; ?>
