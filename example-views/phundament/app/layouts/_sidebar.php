<?php
use yii\helpers\Html;

?>

<!-- Sidebar user panel -->
<?php if (!\Yii::$app->user->isGuest): ?>
    <div class="user-panel">
        <div class="pull-left image">
            <?php echo \cebe\gravatar\Gravatar::widget(
                [
                    'email'   => (\Yii::$app->user->identity->profile->gravatar_email === null)
                                ? \Yii::$app->user->identity->email 
                                : \Yii::$app->user->identity->profile->gravatar_email,
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
$menuItems = [];

$favouriteMenuItems[] = ['label'=>'MAIN NAVIGATION', 'options'=>['class'=>'header']];
$developerMenuItems = [];

foreach (\dmstr\helpers\Metadata::getModules() as $name => $module) {
    $role                        = $name;

    $defaultItem = [
        'icon' => 'fa fa-cube',
        'label'   => $name,
        'url'     => ['/' . $name],
        'visible' => Yii::$app->user->can($role) || (Yii::$app->user->identity && Yii::$app->user->identity->isAdmin),
        'items'   => []
    ];

    // check for module configuration and assign to favourites
    $moduleConfigItem = (is_object($module)) ?
        (isset($module->params['menuItems']) ? $module->params['menuItems'] : []) :
        (isset($module['params']['menuItems']) ? $module['params']['menuItems'] : []);
    switch (true) {
        case (!empty($moduleConfigItem)):
            $moduleConfigItem            = array_merge($defaultItem, $moduleConfigItem);
            $moduleConfigItem['visible'] = \dmstr\helpers\RouteAccess::can($moduleConfigItem['url']);
            $favouriteMenuItems[]        = $moduleConfigItem;
            continue 2;
            break;
        default:
            $defaultItem['icon'] = 'fa fa-circle-o';
            $developerMenuItems[] = $defaultItem;
            break;
    }
}

// create developer menu, when user is admin
if (Yii::$app->user->identity && Yii::$app->user->identity->isAdmin) {
    $menuItems[] = [
        'url' => '#',
        'icon' => 'fa fa-cog',
        'label'   => 'Developer',
        'items'   => $developerMenuItems,
        'options' => ['class' => 'treeview'],
        'visible' => Yii::$app->user->identity->isAdmin
    ];
}

echo dmstr\widgets\Menu::widget([
    'options' => ['class' => 'sidebar-menu'],
    'items' => \yii\helpers\ArrayHelper::merge($favouriteMenuItems, $menuItems),
]);
?>
