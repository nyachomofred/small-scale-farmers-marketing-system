<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Marketplace */

$this->title = Yii::t('app', 'Negotiate for: ' . $model->quantity.''.$model->unit.'  '."of".'  '.$model->product.'  '."from".'  '.$model->name, [
    'nameAttribute' => '' . $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Marketplaces'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Order');
?>
<div class="marketplace-negotiate">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_negotiate', [
        'model' => $model,
    ]) ?>
<?= Html::a('Go back',['marketplace/index'],['class'=>'btn btn-link'])?>
</div>
