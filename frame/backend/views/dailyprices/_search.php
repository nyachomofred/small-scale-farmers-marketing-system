<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DailypricesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dailyprices-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'product') ?>

    <?= $form->field($model, 'location') ?>

    <?= $form->field($model, 'quantity') ?>

    <?= $form->field($model, 'low_price') ?>

    <?= $form->field($model, 'high_price') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
