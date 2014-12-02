<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Sign In';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-box" id="login-box">

    <div class="header"><?= Html::encode($this->title) ?></div>
    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
    <div class="body bg-gray">
        <p>Please fill out the following fields to login:</p>
        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
        <?= $form->field($model, 'rememberMe')->checkbox() ?>
    </div>
    <div class="footer">

        <?= Html::submitButton('Login', ['class' => 'btn bg-olive btn-block', 'name' => 'login-button']) ?>

        <p><a href="#">I forgot my password</a></p>

    </div>
    <?php ActiveForm::end(); ?>
</div>

<div class="margin text-center">
    <span>Sign in using social networks</span>
    <br/>
    <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
    <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
    <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>
</div>