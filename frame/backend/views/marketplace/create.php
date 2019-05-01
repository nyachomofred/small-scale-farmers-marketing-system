<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Marketplace */

$this->title = 'Create Marketplace';
$this->params['breadcrumbs'][] = ['label' => 'Marketplaces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marketplace-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= Html::a('Go back', ['index'], ['class' => 'btn btn-link']) ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
