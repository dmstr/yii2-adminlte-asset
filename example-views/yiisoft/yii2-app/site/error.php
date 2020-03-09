<?php

use yii\helpers\Html;

/** @var \yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var \Exception $exception */

$this->title = $name;
?>
<section class="content">

    <div class="error-page">
        <h2 class="headline text-danger"><i class="fas fa-exclamation-triangle"></i></h2>

        <div class="error-content">
            <h3><?= $name ?></h3>

            <p>
                <?= nl2br(Html::encode($message)) ?>
            </p>

            <p>
                The above error occurred while the Web server was processing your request.
                Please contact us if you think this is a server error. Thank you.
                Meanwhile, you may <?= Html::a('return to dashboard', Yii::$app->homeUrl); ?>
            </p>

        </div>
    </div>

</section>
