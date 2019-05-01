<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Marketplace */

$this->title = Yii::t('app', 'sell something');
?>
<div class="marketplace-create">
   <div class="row">
       <div class="col-sm-1">
       <?= Html::a('Back',['marketplace/index'],['class'=>'btn btn-link'])?>

       </div>
       <div class="col-sm-10">
       
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:green;color:white;"> <h1><?= Html::encode($this->title) ?></h1></div>
                    <div class="panel-body">
                        <?= $this->render('_create', [
                            'model' => $model,
                        ]) ?>
                    </div>
                <div class="panel-footer" style="background-color:green"></div>
            </div>
        </div> 
        </div>
        <?php
        if(Yii::$app->session->hasFlash('success')){
            echo Yii:: $app->session->getFlash('success');
        }
        ?>
        <div class="col-sm-1"></div>
   <div>
</div>
