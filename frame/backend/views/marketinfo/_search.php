<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Marketinfo;

/* @var $this yii\web\View */
/* @var $model backend\models\MarketinfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="marketinfo-search">
    <div class="raw">
    
        <?php $form = ActiveForm::begin([
            'action' => ['index'],
            'method' => 'get',
        ]); ?>

        <div class="col-sm-3"> <?= $form->field($model, 'market_name')->dropDownList(
            ArrayHelper::map(marketinfo::find()->all(),'market_name','market_name'),['prompt'=>'select.....']
        ) ?></div>

         <div class="col-sm-3"> <?= $form->field($model, 'location')->dropDownList(
            ArrayHelper::map(marketinfo::find()->all(),'location','location'),['prompt'=>'select.....']
        ) ?></div>

         <div class="col-sm-3"> <?= $form->field($model, 'market_day')->dropDownList(
            ArrayHelper::map(marketinfo::find()->all(),'market_day','market_day'),['prompt'=>'select.....']
        ) ?></div>

         <div class="col-sm-4"><?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
         <?= Html::a('Back',['index'],['class'=>'btn btn-link'])?>
         </div>

        <?php // echo $form->field($model, 'info') ?>

        
            
        <?php ActiveForm::end(); ?>
    </div>
</div>
