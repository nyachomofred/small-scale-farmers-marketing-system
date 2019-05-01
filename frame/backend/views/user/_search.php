<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Arrayhelper;
use backend\models\User;

?>

<div class="user-search">
    <div class="row">
        <?php $form = ActiveForm::begin([
            'action' => ['index'],
            'method' => 'get',
        ]); ?>

        <?php //echo $form->field($model, 'id') ?>

        <div class="col-sm-3"><?= $form->field($model, 'firstname')->dropDownList(
            ArrayHelper::map(user::find()->all(),'firstname','firstname'),['prompt'=>'select........']
        ) ?></div>

        <div class="col-sm-3"><?= $form->field($model, 'lastname')->dropDownList(
            ArrayHelper::map(user::find()->all(),'lastname','lastname'),['prompt'=>'select........']
        ) ?></div>

         <div class="col-sm-3"><?= $form->field($model, 'email')->dropDownList(
            ArrayHelper::map(user::find()->all(),'email','email'),['prompt'=>'select........']
        ) ?></div>

         <div class="col-sm-3"><?= $form->field($model, 'phonenumber')->dropDownList(
            ArrayHelper::map(user::find()->all(),'phonenumber','phonenumber'),['prompt'=>'select........']
        ) ?></div>

        <?php //echo $form->field($model, 'username') ?>

        <?php //echo $form->field($model, 'auth_key') ?>

        <?php // echo $form->field($model, 'password_hash') ?>

        <?php // echo $form->field($model, 'password_reset_token') ?>

        <?php // echo $form->field($model, 'phonenumber') ?>

        <?php // echo $form->field($model, 'created_at') ?>

        <?php // echo $form->field($model, 'updated_at') ?>

        <div class="form-group">
            <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
