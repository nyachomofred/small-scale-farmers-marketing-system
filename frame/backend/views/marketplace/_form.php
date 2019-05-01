<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Marketplace */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="marketplace-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model, 'sort')->dropDownList(
        [  '1hr hour ago'=>'one hour ago',
            '5hrs ago'=>'5hrs ago',
            '9hrs ago'=>'9hrs ago',
            '12hrs ago'=>'12 hrs ago',
            'one week ago'=>'one week ago',
        'one month ago'=>'one month ago',],['prompt'=>'select......']
    ) ?>

     <?= $form->field($model, 'negotiate')->dropDownList(
        ['negotiate'=>'negotiate','sold'=>'buy'],['prompt'=>'select......']
    ) ?>

        
    <?php //echo $form->field($model,'date')->textInput()?>
    <? php //echo $form->field($model,'from')->textInput()?>
    <?php //echo $form->field($model,'to')->textInput()?>
    <?php //echo $form->field($model,'location')->textInput()?>
  


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
