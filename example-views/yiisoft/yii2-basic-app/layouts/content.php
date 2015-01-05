<?php
use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;
?>
<aside class="right-side">
    <section class="content-header">
        <h1>
            <?= \yii\helpers\Inflector::camel2words(\yii\helpers\Inflector::id2camel($this->context->module->id)) ?>
            <small><?= ($this->context->module->id !== \Yii::$app->id) ? 'Module' : '' ?></small>
        </h1>
        <?=
        Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        ) ?>
    </section>

    <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </section>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

</aside>