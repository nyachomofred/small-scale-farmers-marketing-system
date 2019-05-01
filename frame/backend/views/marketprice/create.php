<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Marketprice */

$this->title = 'Create Marketprice';
$this->params['breadcrumbs'][] = ['label' => 'Marketprices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marketprice-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
