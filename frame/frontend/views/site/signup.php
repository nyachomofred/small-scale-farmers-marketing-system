<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div class="site-signup">
    

    

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
                <div class="panel panel-default">
                <div class=panel-heading style="background-color:#009933;color:white;""><h3>signup form</h3></div>
                    <div class=panel-body>
                    <p>Please fill out the following fields to signup:</p>
                    <div class="row">
                         <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                         <div class="col-sm-4"><?= $form->field($model, 'firstname')->textInput(['autofocus' => true]) ?></div>

                         <div class="col-sm-4"><?= $form->field($model, 'lastname')->textInput(['autofocus' => true]) ?></div>
                     
                         <div class="col-sm-4"> <?= $form->field($model, 'phonenumber')->textInput(['autofocus' => true]) ?></div>
                        </div>
                            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                            <?= $form->field($model, 'email') ?>

                            <?= $form->field($model, 'password')->passwordInput() ?>

                            <div class="form-group">
                                <?= Html::submitButton('Signup', ['class' => 'btn btn-success', 'name' => 'signup-button']) ?>
                                Already A member: <?= Html::a('login',['site/login'],['class'=>'btn btn-link'])?>
                                or <a href="/fmarketing/"> Go home<a/>
                            </div>
                            

                        <?php ActiveForm::end(); ?>
                       
                        </div>
                    </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>


