<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NegotiateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="marketplace-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <h3>Product cartalogue</h3>
    <?php  echo $this->render('_nsearch', ['model' => $searchModel]); ?>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
       //'description:ntext',
       [
           'attribute'=>'products',
           'format'=>'raw',
           'value'=> function( $data)
           {
        
           return 

               Html::a($data->product, ['view','id'=>$data->id], ['product' => 'View','class'=>'no-pjax']);
           }
       ],

       [
           'attribute'=>'  Quantity',
           'format'=>'raw',
           'value'=>'quantity'
       ],

       [
           'attribute'=>'Unit',
           'format'=>'raw',
           'value'=>'unit'
       ],

       [
        'attribute'=>'Price',
        'format'=>'raw',
        'value'=>'price'
    ],
    
    [
        'attribute'=>'Name',
        'format'=>'raw',
        'value'=>'name'
    ],

    [
        'attribute'=>'Email',
        'format'=>'raw',
        'value'=>'email'
    ],

    [
        'attribute'=>'Phone',
        'format'=>'raw',
        'value'=>'phone'
    ],

    [
        'attribute'=>'Location',
        'format'=>'raw',
        'value'=>'location'
    ],

    [
        'attribute'=>'Date',
        'format'=>'raw',
        'value'=>'date'
    ],
    
            //'buyer_name',
            //'phone_email:email',
            //'order_date',
            //'buyer_phone',
            //'quantity_bought',
            //'sort',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
