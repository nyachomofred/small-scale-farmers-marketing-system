<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Myorder;

/* @var $this yii\web\View */
/* @var $model backend\models\MyorderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="myorder-search">
    <div class="row">
    
        <?php $form = ActiveForm::begin([
            'action' => ['index'],
            'method' => 'get',
        ]); ?>

        <?php //echo $form->field($model, 'id') ?>
        <div class="col-sm-3"><?= $form->field($model, 'product')->dropDownList(
            ArrayHelper::map(myorder::find()->all(),'product','product'),['prompt'=>'select........']
        ) ?></div>

         <div class="col-sm-3"><?= $form->field($model, 'due_date')->dropDownList(
            ArrayHelper::map(myorder::find()->all(),'due_date','due_date'),['prompt'=>'select........']
        ) ?></div>

         <div class="col-sm-3"><?= $form->field($model, 'date')->dropDownList(
            ArrayHelper::map(myorder::find()->all(),'date','date'),['prompt'=>'select........']
        ) ?></div>

         <div class="col-sm-3"><?= $form->field($model, 'quantity')->dropDownList(
            ArrayHelper::map(myorder::find()->all(),'quantity','quantity'),['prompt'=>'select........']
        ) ?></div>
        <?php //echo $form->field($model, 'Unit') ?>
        <?php // echo $form->field($model, 'extrainformation') ?>

        <?php // echo $form->field($model, 'Name') ?>

        <?php // echo $form->field($model, 'email') ?>

        <?php // echo $form->field($model, 'phone') ?>

       

        <div class="form-group">
            <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Back',['index'],['class'=>'btn btn-link'])?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
