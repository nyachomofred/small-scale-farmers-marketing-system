<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MarketplaceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marketplace-index">
    <p>
         <?php echo $this->render('_search', ['model' => $searchModel]); ?></div>
   </p>
    
            
            

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                       
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            //'id',
                            //'product',
                            //'quantity',
                        // 'unit',
                        
                            
                           
                           
                            //'foto',

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
                            'description:ntext',
                            [
                                'attribute'=>'Product',
                                'format'=>'raw',
                                'value' => function( $data)
                                {
                                    // return
                                    
                                return 
                
                                    Html::a($data->product, ['view','id'=>$data->id], ['product' => 'View','class'=>'no-pjax']);
                                }
                        ],
                        'quantity',
                          'unit',
                        'location',
                         'price',
                        'name',
                         'email:email',
                          'phone',
                        ],
                    ]); ?> 
                    
</div>
