<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Myorder */

$this->title = 'Update Myorder: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Myorders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="myorder-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
