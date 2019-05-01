<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ActiveRecord;
use yii\helpers\ArrayHelper;
use app\models\Product;
use app\models\Unit;
use app\models\Location;
use common\models\User;
/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">
<?php

$id = Yii::$app->user->identity->id;
$username=Yii::$app->user->identity->username;
$email=Yii::$app->user->identity->email;



?>
    <?php $form = ActiveForm::begin(); ?>

    

    <?= $form->field($model,'product_id')->dropDownList(
        ArrayHelper::map(Product::find()->all(),'id','name'),['prompt'=>'select company']
    )?>

    <?= $form->field($model, 'quantity')->textInput(['maxlength' => true]) ?>

    
    <?= $form->field($model,'unit_id')->dropDownList(
        ArrayHelper::map(Unit::find()->all(),'id','name'),['prompt'=>'select unit']
    )?>


    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

   

    <?= $form->field($model,'location_id')->dropDownList(
        ArrayHelper::map(Location::find()->all(),'id','name'),['prompt'=>'select location']
    )?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'foto')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
