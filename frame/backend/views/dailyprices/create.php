<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dailyprices */

$this->title = 'Create Dailyprices';
$this->params['breadcrumbs'][] = ['label' => 'Dailyprices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dailyprices-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
