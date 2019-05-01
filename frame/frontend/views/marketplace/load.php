<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Marketplace */

$this->title = Yii::t('app', 'Order: ' . $model->quantity.''.$model->unit.'  '."of".'  '.$model->product.'  '."from".'  '.$model->name, [
    'nameAttribute' => '' . $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Marketplaces'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Order');
?>
<div class="marketplace-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_load', [
        'model' => $model,
    ]) ?>

</div>
