<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Marketinfo */

$this->title = 'Create Marketinfo';
$this->params['breadcrumbs'][] = ['label' => 'Marketinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marketinfo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
