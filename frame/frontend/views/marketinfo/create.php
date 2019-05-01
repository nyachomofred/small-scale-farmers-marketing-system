<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Marketinfo */

$this->title = Yii::t('app', 'Create Marketinfo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Marketinfos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marketinfo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
