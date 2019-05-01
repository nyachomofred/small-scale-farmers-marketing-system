<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Myorder */

$this->title = 'Create Myorder';
$this->params['breadcrumbs'][] = ['label' => 'Myorders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="myorder-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
