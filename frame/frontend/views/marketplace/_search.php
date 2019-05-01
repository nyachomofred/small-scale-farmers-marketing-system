<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Marketplace;
?>

<div class="marketplace-search">
    <div class="raw">
        <?php $form = ActiveForm::begin([
            'action' => ['index'],
            'method' => 'get',
        ]); ?>
        
        <div class="col-sm-3"><?= $form->field($model, 'product')->dropDownList(
            ArrayHelper::map(marketplace::find()->all(),'product','product'),['prompt'=>'select....']
        ) ?></div>

        <div class="col-sm-3"><?= $form->field($model, 'sort')->dropDownList(
            ArrayHelper::map(marketplace::find()->all(),'sort','sort'),['prompt'=>'select....']
        ) ?></div>

        <div class="col-sm-3"><?= $form->field($model, 'date')->dropDownList(
            ArrayHelper::map(marketplace::find()->all(),'date','date'),['prompt'=>'select....']
        ) ?></div>

       

       <div class="col-sm-3"> <?= $form->field($model, 'location')->dropDownList(
           ArrayHelper::map(marketplace::find()->all(),'location','location'),['prompt'=>'select.........']
       ) ?></div>
       </div>
       <div class="row">

        <div class="col-sm-4"><?= $form->field($model, 'from')->dropDownList(
            ArrayHelper::map(marketplace::find()->all(),'date','date'),['prompt'=>'select from date format yyy-mm-dd ']
        ) ?></div>

        <div class="col-sm-4"><?= $form->field($model, 'to')->dropDownList(
            ArrayHelper::map(marketplace::find()->all(),'date','date'),['prompt'=>'select to date date format yyy-mm-dd ']
        ) ?></div>

        <?php // echo $form->field($model, 'name') ?>

        <?php // echo $form->field($model, 'email') ?>

        <?php // echo $form->field($model, 'phone') ?>

        <?php // echo $form->field($model, 'foto') ?>

        <?php // echo $form->field($model, 'description') ?>

        <?php // echo $form->field($model, 'location') ?>

        <?php // echo $form->field($model, 'date') ?>

        <?php // echo $form->field($model, 'buyer_name') ?>

        <?php // echo $form->field($model, 'phone_email') ?>

        <?php // echo $form->field($model, 'order_date') ?>

        <?php // echo $form->field($model, 'buyer_phone') ?>

        <?php // echo $form->field($model, 'quantity_bought') ?>

        <?php // echo $form->field($model, 'sort') ?>
    <div class="col-sm-4">
        <div class="form-group">
            <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Back',['index'],['class'=>'btn btn-link'])?>
        </div>
     </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>














<?= Html::a('Negotiate', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-primary',
            'data' => [
                'confirm' => 'You choose to negotiate for this product?',
                //'method' => 'post',
            ],
        ]) ?>