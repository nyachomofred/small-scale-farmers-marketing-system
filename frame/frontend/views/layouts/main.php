<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap" style="background-color: #ffffff">
    <?php
    NavBar::begin(
       
        
    );
   /* $menuItems = [
        
        ['label' => 'Marketplace', 'url' => ['/site/index']],
        ['label' => 'Blog', 'url' => ['/site/index']],
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];*/
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems = [
        
            ['label' => 'MARKETPLACE', 'url' => ['/marketplace/mypost']],
            ['label' => 'MARKET INFO', 'url' => ['/marketinfo/index']],
            ['label' => 'DAILY PRICES', 'url' => ['/marketprice/index']],
            ['label' => 'MARKET ORDERS', 'url' => ['/myorder/index']],
            ['label' => 'PROFILE', 'url' => ['/user/view','id'=>Yii::$app->user->identity->id],['class' => 'profile-link']],
           
            
            
        ];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'LOGOUT (' . Yii::$app->user->identity->firstname .'  '. Yii::$app->user->identity->lastname.')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right','style'=>'color:white'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container" style="background-color:#b3cccc;">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer" style="background-color:#00802b">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
