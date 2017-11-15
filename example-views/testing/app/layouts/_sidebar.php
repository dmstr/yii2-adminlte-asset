<?php

?>

<!-- Sidebar user panel -->
<div class="user-panel">
    <div class="pull-left image">
        <?php echo \cebe\gravatar\Gravatar::widget(
            [
                'email' => 'username@example.com',
                'options' => [
                    'alt' => 'username',
                ],
                'size' => 64,
            ]
        ); ?>
    </div>
    <div class="pull-left info">
        <p>username</p>

        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>


<!-- search form -->
<form action="#" method="get" class="sidebar-form">
    <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search..."/>
        <span class="input-group-btn">
            <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
    </div>
</form>
<!-- /.search form -->


<?php

// prepare menu items, get all modules
$menuItems = [];

$favouriteMenuItems[] = ['label' => 'MAIN NAVIGATION', 'options' => ['class' => 'header']];
$developerMenuItems = [];

$developerMenuItems[] = [
    'url' => '#',
    'icon' => 'cog',
    'label' => 'Test 1',
    'items' => $developerMenuItems,
    'options' => ['class' => 'treeview'],
    'visible' => true,
];

$developerMenuItems[] = [
    'url' => '#',
    'icon' => 'cog',
    'label' => 'Test 2',
    'items' => $developerMenuItems,
    'options' => ['class' => 'treeview'],
    'visible' => true,
];

$developerMenuItems[] = [
    'url' => '#',
    'icon' => 'cog',
    'label' => 'Test 3',
    'items' => $developerMenuItems,
    'options' => ['class' => 'treeview'],
    'visible' => true,
];

$menuItems[] = [
    'url' => '#',
    'icon' => 'cog',
    'label' => 'Test 1',
    'options' => ['class' => 'treeview'],
    'visible' => true,
];

$menuItems[] = [
    'url' => '#',
    'icon' => 'cog',
    'label' => 'Test 2',
    'items' => $developerMenuItems,
    'options' => ['class' => 'treeview'],
    'visible' => true,
];

echo dmstr\widgets\Menu::widget([
    'options' => ['class' => 'sidebar-menu'],
    'items' => \yii\helpers\ArrayHelper::merge($favouriteMenuItems, $menuItems),
]);
?>
