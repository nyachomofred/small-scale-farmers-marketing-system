<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DailypricesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dailyprices';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dailyprices-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dailyprices', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'product',
            'location',
            'low_price',
            'high_price',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
