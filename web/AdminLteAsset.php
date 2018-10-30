<?php
namespace dmstr\web;

use dmstr\helpers\AdminLteHelper;
use yii\base\Exception;
use yii\base\InvalidConfigException;
use yii\web\AssetBundle as BaseAdminLteAsset;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class AdminLteAsset extends BaseAdminLteAsset
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';
    public $css = [
        'css/AdminLTE.min.css',
    ];
    public $js = [
        'js/adminlte.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    /**
     * @var string|bool Choose skin color, eg. `'skin-blue'` or set `false` to disable skin loading
     * @see https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html#layout
     */
    public $skin = '_all-skins';

    /**
     * @var string|bool Set layout options, eg. `'fixed'` or set `false` to default
     * @see https://adminlte.io/themes/AdminLTE/documentation/index.html#layout
     *
     * Examples:
     * @see Fixed - https://adminlte.io/themes/AdminLTE/pages/layout/fixed.html
     * @see Collapsed Sidebar - https://adminlte.io/themes/AdminLTE/pages/layout/collapsed-sidebar.html
     * @see Boxed Layout - https://adminlte.io/themes/AdminLTE/pages/layout/boxed.html
     * @see Top Navigation - https://adminlte.io/themes/AdminLTE/pages/layout/top-nav.html
     */
    public $layout = false;

    /**
     * @inheritdoc
     */
    public function init()
    {
        // Append skin color file if specified
        if ($this->skin) {
            if (('_all-skins' !== $this->skin) && (strpos($this->skin, 'skin-') !== 0)) {
                throw new Exception('Invalid skin specified');
            }

            $this->css[] = sprintf('css/skins/%s.min.css', $this->skin);
        }

        // Append layout options
        if ($layout = $this->layout) {
            if (!array_key_exists($layout, AdminLteHelper::getLayoutHtmlClassOptions())) {
                throw new InvalidConfigException('Invalid layout specified');
            }
	
	        $layoutExtraAssetsOptions = self::getLayoutExtraAssetsOptions();
            if (array_key_exists($layout, $layoutExtraAssetsOptions)) {
	            if (isset($layoutExtraAssetsOptions[$layout]['js'])) {
		            $this->js = array_merge($this->js, $layoutExtraAssetsOptions[$layout]['js']);
	            }
	            if (isset($layoutExtraAssetsOptions[$layout]['css'])) {
		            $this->css = array_merge($this->css, $layoutExtraAssetsOptions[$layout]['css']);
	            }
	            if (isset($layoutExtraAssetsOptions[$layout]['depends'])) {
		            $this->depends = array_merge($this->depends, $layoutExtraAssetsOptions[$layout]['depends']);
	            }
            }
        }

        parent::init();
    }
	
	/**
	 * Get extra scripts and styles options needed to specific layout
	 *
	 * @return array
	 */
	public static function getLayoutExtraAssetsOptions()
	{
		return [
			AdminLteHelper::LAYOUT_OPTION_FIXED => [
				'depends' => [
					AdminLteFixedLayoutAsset::class
				]
			],
		];
	}
}
