<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Marketplace;

/* @var $this yii\web\View */
/* @var $model app\models\Marketplace */
/* @var $form yii\widgets\ActiveForm */
?>
<html>
    <head>
        <title>
        </title>
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script type="text/javascript">
              function calculator(){
                 var quantity=document.getElementById('quantity').value;
                 if(empty(quantity)){
                    alert("this product is already bought");
                 }
             }
        </script>
    </head>
    <body>
    <div class="marketplace-form">

        <?php $form = ActiveForm::begin(); ?>
        <h4>confirm your details</h4>

        <?= $form->field($model, 'buyer_name')->textInput(['maxlength' => true,'readOnly'=>true, 'value'=>Yii::$app->user->identity->firstname.'   '. Yii::$app->user->identity->lastname]) ?>
        <?=$form->field($model, 'phone_email')->textInput(['maxlength' => true, 'readOnly'=>true,'value'=>Yii::$app->user->identity->email]) ?>

        <?=$form->field($model, 'buyer_phone')->textInput(['maxlength' => true, 'readOnly'=>true,'value'=>Yii::$app->user->identity->phonenumber]) ?>
        <?= $form->field($model, 'negotiate')->dropDownList(
        ['negotiate'=>'Yes'],['prompt'=>'select your option ......']
    ) ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'submit'), ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</body>
</html>
