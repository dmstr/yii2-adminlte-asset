<?php
namespace dmstr\web;

use yii\web\AssetBundle;

/**
 * AdminLte AssetBundle
 * @since 1.0
 */
class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@bower/admin-lte/dist';
    public $css = [
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.min.css'
    ];
    public $js = [
        'js/app.min.js',
        'js/demo.js',
    ];
    public $depends = [
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
