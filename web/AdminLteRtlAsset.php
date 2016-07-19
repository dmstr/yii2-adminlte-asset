<?php
namespace airani\web;

use yii\web\AssetBundle;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class AdminLteRtlAsset extends AssetBundle
{
    public $sourcePath = '@bower/adminlte_rtl/dist';

    public $css = [
        'css/AdminLTE-rtl.min.css',
        'css/skins/_all-skins-rtl.min.css',
    ];

    public $depends = [
        'airani\web\AdminLteAsset',
        'airani\bootstrap\BootstrapRtlAsset',
    ];
}
