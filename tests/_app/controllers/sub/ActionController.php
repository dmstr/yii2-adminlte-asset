<?php
/**
 * @link http://www.diemeisterei.de/
 * @copyright Copyright (c) 2017 diemeisterei GmbH, Stuttgart
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace tests\app\controllers\sub;

use yii\web\Controller;

class ActionController extends Controller
{
    public $layout = '@repo/example-views/testing/app/layouts/main';

    public function actionOne()
    {
        return $this->render('@repo/example-views/testing/app/default/index');
    }

    public function actionTwo()
    {
        return $this->render('@repo/example-views/testing/app/default/index');
    }

    public function actionThree()
    {
        return $this->render('@repo/example-views/testing/app/default/index');
    }

    public function actionParam($id)
    {
        return $this->render('@repo/example-views/testing/app/default/index');
    }

}