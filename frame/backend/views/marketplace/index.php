<?php

use yii\helpers\Html;
use yii\grid\GridView;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <script>
     function printContent(el)
      {
         var restorepage = document.body.innerHTML;
         var printcontent = document.getElementById(el).innerHTML;
         document.body.innerHTML = printcontent;
         window.print();
         document.body.innerHTML = restorepage;
     }
  </script>
</head>
<body>
    <div class="marketplace-index" id="div1">
        <h3>Product cartalogue</h3>
        <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
        
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

        //[
            //'attribute'=>'Date',
           // 'format'=>'raw',
            //'value'=>'date'
        //],
        
                //'buyer_name',
                //'phone_email:email',
                //'order_date',
                //'buyer_phone',
                //'quantity_bought',
                //'sort',

                //['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
         <button id="button" class="btn btn-primary" onclick="printContent('div1')"><i class="fa fa-print"></i> Print</
    </div>
</body>
</html>
