<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Marketinfo */

$this->title = 'Update Marketinfo: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Marketinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="marketinfo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
