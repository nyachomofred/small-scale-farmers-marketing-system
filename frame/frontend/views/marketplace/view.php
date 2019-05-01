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
<?= Html::a('Go back',['marketplace/index'],['class'=>'btn btn-link'])?>
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
                
                        'price',
                        'name',
                        'email:email',
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
                    <?= Html::a(Yii::t('app', 'buy'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a(Yii::t('app', 'negotiate'), ['negotiate', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                </p>
            </div>
            <vr></vr>
            <div class="col-sm-4">
               <h4>Nb</h4>
              If you are interested in this product,you can  Email the  owner by clicking 
              the email links or call or sms through the phone number,
              To order directly from the system click the the order button bellow it
            
            </div>
    </div>

</div>
