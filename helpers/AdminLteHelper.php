<?php
namespace dmstr\helpers;

use Yii;

class AdminLteHelper
{
	const LAYOUT_OPTION_FIXED = 'fixed';
	const LAYOUT_OPTION_COLLAPSED_SIDEBAR = 'sidebar-collapse';
	const LAYOUT_OPTION_BOXED_LAYOUT = 'boxed';
	const LAYOUT_OPTION_TOP_NAVIGATION = 'top-nav';
	
	/**
     * It allows you to get the name of the css class.
     * You can add the appropriate class to the body tag for dynamic change the template's appearance.
     * Note: Use this fucntion only if you override the skin through configuration. 
     * Otherwise you will not get the correct css class of body.
     * 
     * @return string
     */
    public static function skinClass()
    {
        /** @var \dmstr\web\AdminLteAsset $bundle */
        $bundle = Yii::$app->assetManager->getBundle('dmstr\web\AdminLteAsset');

        return $bundle->skin;
    }
	
	/**
	 * It allows you to get the name of the layout wrapper html class.
	 * You can add the appropriate class to the body tag for dynamic change the template's appearance.
	 *
	 * @return string
	 */
	public static function layoutHtmlClass()
	{
		/** @var \dmstr\web\AdminLteAsset $bundle */
		$bundle = Yii::$app->assetManager->getBundle('dmstr\web\AdminLteAsset');
		
		return ($layout = $bundle->layout) ? self::getLayoutHtmlClassOptions()[$layout] : '';
	}
	
	/**
	 * Get layout wrapper html classes options
	 *
	 * @return array
	 */
    public static function getLayoutHtmlClassOptions()
    {
        return [
            self::LAYOUT_OPTION_FIXED => 'fixed',
            self::LAYOUT_OPTION_COLLAPSED_SIDEBAR => 'sidebar-collapse',
            self::LAYOUT_OPTION_BOXED_LAYOUT => 'layout-boxed',
            self::LAYOUT_OPTION_TOP_NAVIGATION => 'layout-top-nav',
        ];
    }
}
