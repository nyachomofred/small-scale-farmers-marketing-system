<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Marketplace */

$this->title = 'Update: ' . $model->product.'  '."sold at".'  '.$model->location.'  '."by".'  '.$model->name;
$this->params['breadcrumbs'][] = ['label' => 'Marketplaces', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="marketplace-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= Html::a('Go back', ['index'], ['class' => 'btn btn-link']) ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
