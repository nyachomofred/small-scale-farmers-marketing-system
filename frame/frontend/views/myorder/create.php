<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Myorder */


?>
<div class="myorder-create">
    <div class="row">
        <div class="col-sm-3"> <?= Html::a('Go back',['myorder/index'],['class'=>'btn btn-link'])?></div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#1a1a00;color:white;"><h2>Create new order</h2></div>
                <div class=" panel-body">
                    <?= $this->render('_form', [
                        'model' => $model,
                    ]) ?>
                </div>
                <div class="panel-footer"></div>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div
</div>
