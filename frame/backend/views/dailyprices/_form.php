<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Product;
use app\models\Location;
/* @var $this yii\web\View */
/* @var $model app\models\Dailyprices */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dailyprices-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model,'product')->dropDownList(
        ArrayHelper::map(Product::find()->all(),'id','name'),['prompt'=>'select company']
    )?>

    <?= $form->field($model,'location')->dropDownList(
        ArrayHelper::map(Location::find()->all(),'id','name'),['prompt'=>'select location']
    )?>

    <?= $form->field($model, 'quantity')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'low_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'high_price')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
