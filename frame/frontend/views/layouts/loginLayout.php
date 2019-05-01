<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\DashboardAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

DashboardAsset::register($this);
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
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>

<div class="wrapper">
<header class="main-header" style="background-color;">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      
      <span class="logo-lg"><b>SSF MARKETING SYSTEM</b>System</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
         
                    
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo Yii::$app->user->identity->username.'    '.Yii::$app->user->identity->firstname ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
               
                <p>
                <?php echo Yii::$app->user->identity->username.'   '.YII::$app->user->identity->lastname ?> 
                 
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                <?= Html::a('PROFILE', ['user/view','id'=>Yii::$app->user->identity->id], ['class'=>'btn btn-danger','style'=>'width:80px;']) ?>
                   
                </div>
                <div class="pull-right">
                <?php echo
                 Html::beginForm(['/site/logout'], 'post'),
             Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-success Sign out']
             ),
             Html::endForm() ?>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar" style="background-color:green">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo Yii::$app->user->identity->username.'    '.Yii::$app->user->identity->lastname ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MARKET PLACE</li>
      <li><a href="/fmarketing/frame/frontend/web/marketplace/create"><i class="fa fa-circle"></i> <span>Sell something</span></a></li>
        <li><a href="/fmarketing/frame/frontend/web/marketplace/index"><i class="fa fa-circle "></i> <span>New Market post</span></a></li>
        <li><a href="/fmarketing/frame/frontend/web/marketplace/mypost"><i class="fa fa-circle "></i> <span>My post</span></a></li>
       
        <li><a href="/fmarketing/frame/frontend/web/marketplace/fnegotiate"><i class="fa fa-circle"></i> <span>Product under negotiation</span></a></li>
        <li><a href="/fmarketing/frame/frontend/web/marketplace/bought"><i class="fa fa-circle"></i> <span>Sold Product</span></a></li>
      
      <li class="header">MARKET OVERVIEW</li>
        
        <li><a href="/fmarketing/frame/frontend/web/marketinfo/index"><i class="fa fa-circle"></i> <span>Marketinfo</span></a></li>
        <li><a href="/fmarketing/frame/frontend/web/marketprice/index"><i class="fa fa-circle"></i> <span>Market prices</span></a></li>
        <li><a href="/fmarketing/frame/frontend/web/myorder/index"><i class="fa fa-circle"></i> <span>Market orders</span></a></li>
        <li><a href="/fmarketing/frame/frontend/web/pricetrend/index"><i class="fa fa-circle"></i> <span>Price trend</span></a></li>
        <li><a href="/fmarketing/index.html"><i class="fa fa-circle"></i> <span>Go home</span></a></li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SMALL SCALE FARMERS MARKETING SYSTEM
       
      </h1>
      <ol class="breadcrumb">
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" style="background-color:white;">
        <?= $content ?>
    </section>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
