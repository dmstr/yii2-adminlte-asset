<?php
namespace dmstr\adminlte\web;

use yii\web\AssetBundle;

/**
 * FontAwesome AssetBundle
 */
class FontAwesomeAsset extends AssetBundle
{
	public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins/fontawesome-free';

	public $css = [
		'css/all.min.css',
	];
}
