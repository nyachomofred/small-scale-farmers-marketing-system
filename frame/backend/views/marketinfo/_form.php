<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Marketinfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="marketinfo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'market_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capacity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'market_day')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'info')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
