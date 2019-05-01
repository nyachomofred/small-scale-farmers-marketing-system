<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Myorder */


?>
<div class="myorder-view">

    <h3>Order created sucessfully</h3>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'product',
            'quantity',
            'Unit',
            'due_date',
            'extrainformation:ntext',
            'Name',
            'email:email',
            'phone'
        ],
    ]) ?>
 <?= Html::a('Go back',['myorder/index'],['class'=>'btn btn-link'])?>
</div>
