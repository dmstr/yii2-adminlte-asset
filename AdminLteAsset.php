<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace dmstr\web;

use yii\web\AssetBundle;

/**
 * Configuration for `backend` client script files
 * @since 4.0
 */
class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@bower/';
    public $css = ['admin-lte/css/AdminLTE.css', 'font-awesome/css/font-awesome.min.css'];
    public $js = ['admin-lte/js/AdminLTE/app.js'];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
