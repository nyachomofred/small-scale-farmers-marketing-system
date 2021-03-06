<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MarketplaceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marketplace-index">
    <div class="row">
        <h2>These product have already been bought</h2>
        <div class="col-sm-12"> <?php echo $this->render('_search', ['model' => $searchModel]); ?></div>
    </div>
    <div class="row">
        <div class="col-sm-4">
        
                
            <div class="col-sm-6">
            

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                       
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            //'id',
                            //'product',
                            //'quantity',
                        // 'unit',
                        // 'price',
                            //'name',
                            //'email:email',
                            //'phone',
                            //'foto',

                            [
                                'attribute'=>'image',
                                'format'=>'raw',
                                'value'=> function($data){
                                    if(!is_null($data->foto)){
                                        return Html::img(Yii::$app->homeUrl.'uploads/'.$data->foto,
                                        ['style'=>'width:100px;height:100px']
                                    );
                                    }else{
                                        return NULL;
                                    }
                                }
                        ],
                            'description:ntext',
                            [
                                'attribute'=>'Product',
                                'format'=>'raw',
                                'value' => function( $data)
                                {
                                    // return
                                    
                                return 
                
                                    Html::a($data->product, ['bview','id'=>$data->id], ['product' => 'View','class'=>'no-pjax']);
                                }
                        ],
                        'location',
                        'name',
                        'phone',
                        'buyer_name',
                        'buyer_phone',
                       

                        ],
                    ]); ?> 
                    
            
            </div>
            <div class="col-sm-2"></div>
    </div>
</div>
