<?php
namespace dmstr\web;

use yii\web\AssetBundle;

/**
 * FontAwesome AssetBundle
 */
class FontAwesomeAsset extends AssetBundle
{
	public $sourcePath = '@vendor/almasaeed2010/adminlte/bower_components/font-awesome';

	public $css = [
		'css/font-awesome.css',
	];
}
