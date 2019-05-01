<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MyorderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="myorder-index">
    <div class="row">
        <div class="col-sm-12">
            <?php echo $this->render('_search', ['model' => $searchModel]); ?>
            <?= Html::a('Back',['myorder/index'],['class'=>'btn btn-link'])?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                //'filterModel' => $searchModel,
                'columns' => [
                // ['class' => 'yii\grid\SerialColumn'],

                    //'id',
                    'product',
                    'quantity',
                    'Unit',
                    'due_date',
                    //'extrainformation:ntext',
                    'Name',
                    'email:email',
                    'phone',

                    //['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>
</div>
