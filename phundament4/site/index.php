<div class="row">
    <div class="col-lg-3 col-xs-6">
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
                <i class="ion ion-bag"></i>
            </div>
        </div>
        <?= yii\helpers\Html::a('Manage Users', ['/user/admin'], ['class' => 'btn btn-default btn-block btn-flat']); ?>
        <?=
        yii\helpers\Html::a(
            'Create User',
            ['/user/admin/create'],
            ['class' => 'btn btn-default btn-block btn-flat']
        ); ?>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
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
                <i class="ion ion-person-add"></i>
            </div>
        </div>
        <?= yii\helpers\Html::a('Site', '../../frontend/web/index.php?r=site', ['class' => 'btn btn-default btn-block btn-flat']); ?>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
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
        </div>
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
    <!-- ./col -->

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>
                    3
                </h3>

                <p>
                    Documents
                </p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
        </div>
        <?= yii\helpers\Html::a('Class Reference', '../../docs-html/index.html', ['target' => '_blank', 'class' => 'btn btn-default btn-block btn-flat']); ?>
        <?= yii\helpers\Html::a('Developer Guide', '../../docs-html/guide-README.html', ['target' => '_blank', 'class' => 'btn btn-default btn-block btn-flat']); ?>
        <?= yii\helpers\Html::a('User Guide', 'https://docs.google.com', ['target' => '_blank', 'class' => 'btn btn-default btn-block btn-flat']); ?>
    </div>
    <!-- ./col -->
</div>