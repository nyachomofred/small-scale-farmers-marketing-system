<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Product;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\DailypricesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dailyprices-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'layout'=>'horizontal',
        'class'=>'form-horizontal',
    ]); ?>

   <?= $form->field($model,'product',['options'=>['style'=>'width:400px']])->dropDownList(
        ArrayHelper::map(Product::find()->all(),'id','name'),['prompt'=>'Search by product']
    )?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
