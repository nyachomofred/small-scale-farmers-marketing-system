<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Product;



/* @var $this yii\web\View */
/* @var $model app\models\PostSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        
        'class'=>'form-horizontal',
    ]); ?>

    

    <?= $form->field($model,'product_id',['options'=>['style'=>'width:400px']])->dropDownList(
        ArrayHelper::map(Product::find()->all(),'id','name'),['prompt'=>'Search by product']
    )?>


    

    

    

    <?php // echo $form->field($model, 'location_id') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
 
    </div>

    <?php ActiveForm::end(); ?>

</div>
