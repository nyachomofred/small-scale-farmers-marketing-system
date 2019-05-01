<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dailyprices */

$this->title = 'Update Dailyprices: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dailyprices', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dailyprices-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
