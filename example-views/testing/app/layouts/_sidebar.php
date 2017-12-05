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
            <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i
                        class="fa fa-search"></i></button>
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
    'url' => ['/sub/action/one'],
    'icon' => 'cog',
    'label' => 'Sub 1',
];
$developerMenuItems[] = [
    'icon' => 'cog',
    'label' => 'No Link',
];
$developerMenuItems[] = [
    'icon' => 'cog',
    'label' => 'Not visible',
    'visible' => false,
];
$developerMenuItems[] = [
    'icon' => 'cog',
    'label' => 'Folder',
    'items' => [
        [
            'url' => ['/sub/action/two'],
            'icon' => 'cog',
            'label' => 'SubSub 2',
        ],
    ],
];
$developerMenuItems[] = [
    'url' => ['/sub/action/three'],
    'icon' => 'cog',
    'label' => 'Sub 3',
];
$developerMenuItems[] = [
    'url' => ['/sub/action/param', 'id' => 'a'],
    'icon' => 'cog',
    'label' => 'Param A',
];
$developerMenuItems[] = [
    'url' => ['/sub/action/param', 'id' => 'b'],
    'icon' => 'cog',
    'label' => 'Param B',
];


$menuItems[] = [
    'url' => ['/test'],
    'icon' => 'cog',
    'label' => 'Test',
];

$menuItems[] = [
    #'url' => '#',
    'icon' => 'cog',
    'label' => 'Test with items',
    'items' => $developerMenuItems,
];

for ($i = 0; $i < 25; $i++) {
    $menuItems[] = [
        'url' => ['/test/auto', 'id' => $i],
        'icon' => 'cog',
        'label' => 'Auto '.$i,
    ];
}

echo dmstr\widgets\Menu::widget([
    'items' => \yii\helpers\ArrayHelper::merge($favouriteMenuItems, $menuItems),
]);
?>
