<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use app\models\Post;
use app\models\Location;
use app\models\Unit;
use app\models\Product;

$dataProvider= new ActiveDataProvider([
    'query'=>Post::find(),
    'pagination'=>['pageSize'=>10],
]);




/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Posts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">
        <div class="row">
                
                
                <div class="col-sm-8">
                    <h1><?= Html::encode($this->title) ?></h1>
                    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

                    <p>
                        <?= Html::a(Yii::t('app', 'Create Post'), ['create'], ['class' => 'btn btn-success']) ?>
                    </p>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,

                        
                        //'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            //'id',
                            //'product_id',
                            'product.displayname:text:product',
                            'quantity',
                            'unit.displayname:text:unit',
                        

                            //'unit_id',
                        // 'price',

                            'location.displayname:text:location',
                        // 'location_id',
                            'date',
                            'description:ntext',
                            //'user_id',

                        /* [
                                                                    
                                'attribute'=>'foto',
                                'format'=>'raw',
                                'contentOptions' =>['style' => 'width:30px'],
                                'value'=> function($data){
                                    if(!is_null($data->foto)){
                                        return Html::img(Yii::$app->homeUrl.'uploads/'.$data->foto,
                                        ['style'=>'width:150px;height:100px'],['class'=>'img-rounded']
                                    );
                                    }else{
                                        return NULL;
                                    }
                                }
                        ],*/
                        
                        //  'foto',

                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
                </div>
                <div class="col-sm-4">
                    <div class="pdanel panel-default">
                           <div class="panel-header"></div>
                           <div class="panel panel-body">
                                <div id="sidebar" class="well sidebar-nav">
                                        <h5><i class="glyphicon glyphicon-home"></i>
                                            <small><b>MARKETPLACE</b></small>
                                        </h5>
                                        <ul class="nav nav-pills nav-stacked">
                                            <li class="active"><a href="create">SELL SOMETHING</a></li>
                                            <li class="active"><a href="#">YOUR POST</a></li>
                                            <li class="active"><a href="#">ADMIN DASHBOARD</a></li>
                                            <li><a href="/basic/web/orders/">view ordered products</a></li>
                                        </ul>
        
                                </div>
                           </div>
                    </div>
                
                </div>
        </div>  
</div>
