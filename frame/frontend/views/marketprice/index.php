<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MarketpriceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Market prices');
?>
<div class="marketprice-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p><center> <?php  echo $this->render('_search', ['model' => $searchModel]); ?></center></p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          
            'comodity',
            'uom',
            'weight',
            'location',
            'price',

           
        ],
    ]); ?>
</div>
