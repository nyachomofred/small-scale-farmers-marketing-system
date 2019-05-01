<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MarketinfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


?>
<div class="marketinfo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'market_name',
            'location',
            'capacity',
            'market_day',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
