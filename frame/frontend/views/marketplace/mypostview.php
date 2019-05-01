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
                    
                        'buyer_name',
                        'phone_email:email',
                        
                        'buyer_phone',
                        'order_date'
                     
                    ],
                ]) ?>
                
            </div>
            <vr></vr>
            <div class="col-sm-4">
              
            </div>
    </div>

</div>
