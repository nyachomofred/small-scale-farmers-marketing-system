<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DailypricesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Price Information for August 6, 2018';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dailyprices-index">
       
       <h2><?= Html::encode($this->title) ?></h2>
       <p><center> <?php  echo $this->render('_search', ['model' => $searchModel]); ?></center></p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'product',
            'location',
            'low_price',
            'high_price',

        ],
    ]); ?>
</div>
  