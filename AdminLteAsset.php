<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets\adminlte;

use yii\web\AssetBundle;

/**
 * Configuration for `backend` client script files
 * @since 4.0
 */
class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@backend/assets/adminlte/AdminLTE-master';
    //public $basePath = 'AdminLTE-master';
    public $baseUrl = '@web';
    public $css = [
        'css/AdminLTE.css',
    ];
    public $js = [
        'js/AdminLTE/app.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
