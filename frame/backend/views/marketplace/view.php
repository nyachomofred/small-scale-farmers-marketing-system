<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Marketplace */

$this->title = $this->title = $model->product.' '.$model->quantity.' '.$model->unit.' '."sold".' '."at".' '.$model->location.' '."by ".' '.$model->name;
$this->params['breadcrumbs'][] = ['label' => 'Marketplaces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marketplace-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= Html::a('Go back', ['index'], ['class' => 'btn btn-link']) ?>
    <p>
        
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
           
            [
                'attribute'=>'image',
                'format'=>'raw',
                'value'=> function($data){
                    if(!is_null($data->foto)){
                        return Html::img(Yii::$app->homeUrl.'uploads/'.$data->foto,
                        ['style'=>'width:100px;height:100']
                    );
                    }else{
                        return NULL;
                    }
                }
        ],
        'product',
            'quantity',
            'unit',
            'price',
            'name',
           // 'email:email',
            'phone',
//'foto',
            //'description:ntext',
            //'location',
            //'date',
            //'buyer_name',
            //'phone_email:email',
            //'order_date',
            //'buyer_phone',
            //'quantity_bought',
            //'sort',
        ],
    ]) ?>
    <p>
        <?= Html::a('buy', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Negotiate', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-primary',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>

