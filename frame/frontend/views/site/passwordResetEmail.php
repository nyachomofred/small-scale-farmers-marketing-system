<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;


?>


<html>
   <head>
        <title>Login form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        
       
   </head>
<body style="background-color:green;">
    <div class="site-login">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading" style="background-color:#009933;color:white;"><center><h3>Enter Your email<h3></center></div>
                    <div class="panel-body">
                                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                                <?= $form->field($model,'username')->textInput(['autofocus'=>true])?>
                                <?= $form->field($model,'password')->passwordInput() ?>
                                <?= $form->field($model,'rememberMe')->checkbox()?>
                                <?= Html::submitButton('Login', ['class' => 'btn btn-success', 'name' => 'login-button','style'=>'width:330px;']) ?>
                               click here to: <?= Html::a('register',['site/signup'],['class'=>'btn btn-link'])?>
                               or <a href="/fmarketing/"> Go home<a/><br>
                               <?= Html::a('Login',['site/login'],['class'=>'btn btn-link'])?>
                            <?php ActiveForm::end(); ?>
                    
                    </div>
                    <div class="panel-footer"></div>
                </div>
        </div>        
        </div class="col-sm-4"></div>
        </div>
    </div>
</body>

</html>
