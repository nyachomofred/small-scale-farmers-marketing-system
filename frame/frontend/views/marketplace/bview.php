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
                        //'price',
                        'buyer_name',
                        'buyer_phone',
                        'phone_email:email',
                        //'quantity_bought',
                        'order_date',
                        //'location',
                    // 'adress',

                    /* [
                            'attribute'=>'foto',
                            'format'=>'raw',
                            'value'=> function($data){
                                if(!is_null($data->foto)){model
                                    return Html::img(Yii::$app->homeUrl.'uploads/'.$data->foto,
                                    ['style'=>'width:50px;height:50px']
                                );
                                }else{
                                    return NULL;
                                }
                            }
                    ],*/
                    // 'foto',
                    ],
                ]) ?>
                 
            </div>
            <vr></vr>
            <div class="col-sm-4">
               <h4>Nb</h4>
              this product has been bought
            
            </div>
    </div>

</div>
