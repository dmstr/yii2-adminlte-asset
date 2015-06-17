<?php
use yii\helpers\Html;

?>

<!-- Sidebar user panel -->
<?php if (!\Yii::$app->user->isGuest): ?>
    <div class="user-panel">
        <div class="pull-left image">
            <?php echo \cebe\gravatar\Gravatar::widget(
                [
                    'email'   => \Yii::$app->user->identity->profile->gravatar_email,
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

// prepare menu items, get all modules
$developerMenuItems = $favouriteMenuItems = [];
foreach (\dmstr\helpers\Metadata::getModules() as $name => $module) {
    $role                        = 'editor';

    $defaultItem = [
        'label'   => $name,
        'url'     => ['/' . $name],
        'visible' => Yii::$app->user->can($role) || (Yii::$app->user->identity && Yii::$app->user->identity->isAdmin),
        'options' => ['class' => 'active'],
        'items'   => []
    ];

    // check for module configuration and assign to favourites
    $moduleConfigItem = (is_object($module)) ?
        (isset($module->params['menuItems']) ? $module->params['menuItems'] : []) :
        (isset($module['params']['menuItems']) ? $module['params']['menuItems'] : []);
    switch (true) {
        case (!empty($moduleConfigItem)):
            // TODO: read role from item
            $moduleConfigItem            = array_merge($defaultItem, $moduleConfigItem);
            $moduleConfigItem['visible'] = (
                Yii::$app->user->can($role) || (Yii::$app->user->identity && Yii::$app->user->identity->isAdmin)
            );
            $favouriteMenuItems[]        = $moduleConfigItem;
            continue 2;
            break;
        default:
            $developerMenuItems[] = $defaultItem;
            break;
    }
}

// create developer menu, when user is admin
if (Yii::$app->user->identity && Yii::$app->user->identity->isAdmin) {
    $menuItems[] = [
        'label'   => 'Developer',
        'items'   => $developerMenuItems,
        'options' => ['class' => 'treeview'],
        'visible' => Yii::$app->user->identity->isAdmin
    ];
}
?>

<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>

    <?php foreach ($favouriteMenuItems as $item): ?>
        <?php if ($item['visible']): ?>
            <?php if (!$item['items']): ?>
                <li>
                    <?= Html::a('<i class="fa fa-cube"></i> ' . $item['label'], $item['url']) ?>
                </li>
            <?php else: ?>
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-list"></i>
                        <span><?= $item['label'] ?></span>
                        <span class="label label-primary pull-right"><?= count($item['items']) ?></span>
                    </a>
                    <ul class="treeview-menu">
                        <?php foreach ($item['items'] as $subItem): ?>
                            <li>
                                <?=
                                Html::a(
                                    '<i class="fa fa-square-o"></i> ' . $subItem['label'],
                                    $subItem['url']
                                )
                                ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            <?php endif; ?>
        <?php endif; ?>
    <?php endforeach; ?>

    <?php if (Yii::$app->user->identity && Yii::$app->user->identity->isAdmin): ?>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-cog"></i>
                <span>Developer</span>
                <span class="label label-primary pull-right"><?= count($developerMenuItems) ?></span>
            </a>
            <ul class="treeview-menu">
                <?php foreach ($developerMenuItems as $item): ?>
                    <li><?= Html::a(
                            '<i class="fa fa-circle-o"></i> ' . $item['label'],
                            $item['url']
                        ) ?></li>
                <?php endforeach; ?>
            </ul>
        </li>
    <?php endif; ?>

</ul>