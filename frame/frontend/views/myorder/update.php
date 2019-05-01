<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Myorder */

$this->title = Yii::t('app', 'Update Myorder: ' . $model->Name, [
    'nameAttribute' => '' . $model->Name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Myorders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="myorder-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
 <?= Html::a('Go back',['Myorder/index'],['class'=>'btn btn-link'])?>
</div>
