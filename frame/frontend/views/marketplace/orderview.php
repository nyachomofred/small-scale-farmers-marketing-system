<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Marketplace */

$this->title = $model->product.' '.$model->quantity.''.$model->unit.' '."sold".' '."at".' '.$model->location;

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Marketplaces'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marketplace-view">
    <div class="row">
            <div class="col-sm-8">
                <h1><?= Html::encode($this->title) ?></h1>

               

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                    // 'id',
                        //'product',
                        //'quantity',
                    // 'unit',
                        'buyer_name',
                        'phone_emai',
                        'order_date',
                        'phone',
                        //'location',
                    // 'adress',

                    /* [
                            'attribute'=>'foto',
                            'format'=>'raw',
                            'value'=> function($data){
                                if(!is_null($data->foto)){model
                                    return Html::img(Yii::$app->homeUrl.'uploads/'.$data->foto,
                                    ['style'=>'width:100px;height:100']
                                );
                                }else{
                                    return NULL;
                                }
                            }
                    ],*/
                    // 'foto',
                    ],
                ]) ?>
                 <p>
                    <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    
                </p>
            </div>
            <vr></vr>
            <div class="col-sm-4">
              
             
            
            </div>
    </div>

</div>
