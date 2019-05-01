<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Marketplace;


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body onload="window.print();>
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="invoice">
        <!-- title row -->
        <div class="row">
          <div class="col-xs-12">
            <h2 class="page-header">
              </i> <h2>CUSTOMER INVOICE</h2>.
              <small class="pull-right">Date: 17/08/2018</small>
            </h2>
          </div>
          <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
            From
            <address>
              <strong><?php echo $model->name ?></strong><br>
             
              Phone: <?php echo $model->phone ?><br>
              Email: <?php echo $model->email ?>
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            To
            <address>
              <strong><?php echo $model->buyer_name?></strong><br>
            
              Phone: <?php echo $model->buyer_phone?><br>
              Email: <?php echo $model->phone_email?>
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            <b>Invoice #00<?php echo $model->id?></b><br>
            
            <b>Order ID:</b> 4F3S<?php echo $model->id?>J<br>
            <b>Payment Due:</b> 24/08/2018<br>
            <b>Account:</b> 968-34567
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
              <h2>CUSTOMER ORDER DETAILS</h2>
              <tbody>
              <tr>
                <td>Product</td>
                <td></td>
                <td><?php echo $model->product?></td>
                
              </tr>
              <tr>
                <td>Quantity</td>
                <td></td>
                <td><?php echo $model->quantity_bought?><?php echo $model->unit ?></td>
                
              </tr>
              <tr>
                <td>Sub total</td>
                <td></td>
                <td>ksh<?php echo $model->price?></td>
               
              </tr>
              <tr>
                <td>Date Ordered</td>
                <td></td>
                <td><?php echo $model->order_date?></td>
                <td></td>
                <td></td>
              </tr>
              </tbody>
            </table>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <!-- accepted payments column -->
          <div class="col-xs-6">
            <p class="lead">Payment Methods:</p>
            <img src="../../dist/img/credit/visa.png" alt="Visa">
            <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
            <img src="../../dist/img/credit/american-express.png" alt="American Express">
            <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
              Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
              dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
            </p>
          </div>
          <!-- /.col -->
          <div class="col-xs-6">
            <p class="lead">Amount Due 24/08/2018</p>

            <div class="table-responsive">
              <table class="table">
                <tr>
                  <th style="width:50%">Subtotal:</th>
                  <td>ksh <?php echo $model->price?>.00</td>
                </tr>
                <tr>
                  <th>Tax (00.00%)</th>
                  <td>ksh 0.00</td>
                </tr>
                <tr>
                  <th>Shipping:</th>
                  <td>ksh0.00</td>
                </tr>
                <tr>
                  <th>Total:</th>
                  <td>ksh <?php echo $model->price?>.00</td>
                </tr>
              </table>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
          <div class="col-xs-12">
            <a href="invoice-print.html" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Print</a>
           

           
          </div>
        </div>
      </section>
      <!-- /.content -->
    
    </div>
</body>
</html>