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
            This product is under negotiation
                </p>
            </div>
            <vr></vr>
            <div class="col-sm-4">
            
            </div>
    </div>

</div>
