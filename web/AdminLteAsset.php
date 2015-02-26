<?php
namespace dmstr\web;

use yii\web\AssetBundle;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@bower/admin-lte/dist';
    public $css = [
        'css/AdminLTE.css',
        'css/skins/_all-skins.css'
        #'font-awesome/css/font-awesome.min.css'
    ];
    public $js = [
        'js/app.js'
    ];
    public $depends = [
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
