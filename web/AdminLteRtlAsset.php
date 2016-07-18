<?php
namespace airani\web;

use yii\web\AssetBundle;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class AdminLteRtlAsset extends AssetBundle
{
    public $sourcePath = '@bower/adminlte-rtl';

    public $css = [
        'dist/css/AdminLTE-rtl.min.css',
        'dist/css/skins/_all-skins-rtl.min.css',
    ];

    public $depends = [
        'airani\bootstrap\BootstrapRtlAsset',
        'airani\web\AdminLteAsset',
    ];
}
