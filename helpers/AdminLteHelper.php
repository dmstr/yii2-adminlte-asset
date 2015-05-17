<?php
namespace dmstr\helpers;

use Yii;

class AdminLteHelper
{
    /**
     * @return string
     */
    public static function skinClass()
    {
        /** @var \dmstr\web\AdminLteAsset $bundle */
        $bundle = Yii::$app->assetManager->getBundle('dmstr\web\AdminLteAsset');

        return $bundle->skin;
    }
}
