<?php
/**
 * @link http://www.diemeisterei.de/
 * @copyright Copyright (c) 2017 diemeisterei GmbH, Stuttgart
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace tests\app\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    public $layout = '@repo/example-views/testing/app/layouts/main';

    public function actionIndex()
    {
        return $this->render('@repo/example-views/testing/app/default/index');
    }

    public function actionAuto()
    {
        return $this->render('@repo/example-views/testing/app/default/index');
    }

    public function actionLogin()
    {
        $this->layout = '@repo/example-views/testing/app/layouts/login';
        return $this->render('@repo/example-views/testing/app/security/login');
    }
}