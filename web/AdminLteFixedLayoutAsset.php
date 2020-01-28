<?php
namespace dmstr\web;

use yii\web\AssetBundle as BaseAdminLteAsset;

/**
 * AdminLteFixedLayout AssetBundle
 * @since 0.1
 */
class AdminLteFixedLayoutAsset extends BaseAdminLteAsset
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/bower_components/jquery-slimscroll';
    public $css = [];
    public $js = [
        'jquery.slimscroll.min.js',
    ];
}
