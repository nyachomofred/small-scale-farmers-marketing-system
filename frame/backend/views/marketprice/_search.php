<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Marketprice;



/* @var $this yii\web\View */
/* @var $model backend\models\MarketpriceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="marketprice-search">
    <div class="row">
        <?php $form = ActiveForm::begin([
            'action' => ['index'],
            'method' => 'get',
        ]); ?>
       <div class="col-sm-4"> <?= $form->field($model, 'comodity')->dropDownList(
           ArrayHelper::map(marketprice::find()->all(),'comodity','comodity'),['prompt'=>'select........']
       ) ?></div>

       <div class="col-sm-4"> <?= $form->field($model, 'uom')->dropDownList(
           ArrayHelper::map(marketprice::find()->all(),'uom','uom'),['prompt'=>'select........']
       ) ?></div>

       <div class="col-sm-4"> <?= $form->field($model, 'location')->dropDownList(
           ArrayHelper::map(marketprice::find()->all(),'location','location'),['prompt'=>'select........']
       ) ?></div>

        <div class="form-group">
            <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Back',['index'],['class'=>'btn btn-link'])?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
