<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Myorder */
/* @var $form yii\widgets\ActiveForm */
?>

<html>
   <head>
        <title>Report an incidence</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript">
           function myfunction(){
               var dat1=document.getElementById('due_date').value;
               var date1=new Date(dat1);
               alert(date1);
           }
        </script>
       
       
   </head>
<body>
    <div class="myorder-form">

        <?php $form = ActiveForm::begin(); ?>
        
        <?= $form->field($model, 'Name')->textInput(['maxlength' => true,'readOnly'=>true, 'value'=>Yii::$app->user->identity->firstname.'   '. Yii::$app->user->identity->lastname]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true,'readOnly'=>true, 'value'=>Yii::$app->user->identity->email]) ?>

        <?= $form->field($model, 'phone')->textInput(['maxlength' => true,'readOnly'=>true, 'value'=>Yii::$app->user->identity->phonenumber]) ?>

        <?= $form->field($model, 'product') ->dropDownList(
                ['dry maize'=>'Dry maize',
                'Millet'=>' Millet',
                'Cassava'=>'Cassava',
                'rice'=>'rice',
                'Garlic'=>'Garlic',
                'Sorghum'=>'Sorghum',
                'Wheat'=>'Wheat',
                'Beans Canadian'=>'Beans Canadian',
                'Cassava'=>'Cassava',
                'Green Gram'=>'Green Gram',
                'Cowpeas'=>'Cowpeas',
                'Groundnut'=>'Groundnut',
                'Cabages'=>'Cabages',
                'Bananas'=>'Bananas',
                'Carrots'=>'Carrots',
                'Tomatoes'=>'Tomatoes',
                'Onions'=>'Onions',
                'Chilies'=>'Chilies',
                'Cassava'=>'Cassava',
                'Cacumber'=>'Cacumber',
                'Capsicum'=>'Capsicum',
                'Passion Fruit'=>'Passion Fruit',
                'Oranges'=>'Oranges',
                'Lemon'=>'Lemon',
                'Mangoes'=>'Mangoes',
                'Pineapples'=>'Pineapple',
                'Pawpaw'=>'Pawpaw',
                'Avacado'=>'Avacado',
                'kales'=>'Kales',
                'Eggs(local)'=>'Eggs(local)',
                'Eggs(grade)'=>'Eggs(grade)',
                'Watermellon'=>'Watermellon',
                'Arrowroot'=>'Arrowroot',
                'Coriander'=>'Coriander',
                'French Beans'=>'French beans',
                'Strawberries'=>'Strawbarries',
                'Irish potatoe'=>'Sweet Potatoe',
                'Garden peas'=>'Garden peas',
                'RoseMary'=>'RoseMary',
                'Sugar Snap'=>'Sugar Snap',
                'Mushrooms'=>'Mushrooms',
                'Beetroot'=>'Beetroot',
                'Pumkin'=>'Pumpkin',
                'Aloevera leaves'=>'Aloevera Leaves',
                'Butternut'=>'Butternut',
                'Chia seeds'=>'Chia seeds',
                'Spinach'=>'Spinach',
                'Arrowroot'=>'Arrowroot',
                'Soya beans'=>'Soya beans',
                'Mrenda'=>'Mrenda',
                'Arrowroot'=>'Arrowroot',
                'Mitoo'=>'Mitoo',
                'Coconut'=>'Coconut',
                'Simsim'=>'Simsim',
                'Sweet potatoe'=>'Sweet potatoes',
                'Maize'=>'Maize'],['prompt'=>'select.......']);?>

        <?= $form->field($model, 'quantity')->textInput(['type'=>'number','min'=>1,'max'=>10000,'id'=>'quantity',]) ?>

        <?= $form->field($model, 'Unit') ->dropDownList(
                ['Kilogram'=>'Kilogram',
                'Bunch'=>' Bunch',
                'Pieces'=>'Pieces'],['prompt'=>'select.......']);?>


        <?= $form->field($model, 'due_date')->textInput(['maxlength' => true,'id'=>'due_date']) ?>

        <?= $form->field($model, 'extrainformation')->textarea(['rows' => 6]) ?>


        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</body>
</html>
