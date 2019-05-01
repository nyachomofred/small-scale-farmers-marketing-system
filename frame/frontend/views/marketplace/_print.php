<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Marketplace;


?>
<html lang="en-US">
<html>
    <head>
        <title>how to download pdf</title>
        
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudf1are.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
        
    </head>
    <body>
    <div class="marketplace-form" id="print">
           <div class="row">
             <div class="col-sm-4">
             Name:<?php echo $model->buyer_name?></br>
             Phonenumber:<?php echo $model->buyer_phone?></br>
             Email:<?php echo $model->phone_email?>

             </div>
             <div class="col-sm-4"></div>
             <div class="col-sm-4"></div>
           </div>
           <div class="row">
               <div class="col-sm-12">
                 <h2>Order details</h2>
                   <table class="table" style="border:2px solid black;">
                     <tr>
                        <th>product</th>
                        <th>Quantity</th>
                        <th>unit</th>
                        <th>price</th>
                        <th>Order from/location</th>
                        <th>date ordered</th>
                       
                     </tr>
                     <tr>
                        <td><?php echo $model->product ?></td>
                        <td><?php echo $model->quantity ?></td>
                        <td><?php echo $model->unit ?></td>
                        <td><?php echo $model->price ?></td>
                        <td><?php echo $model->location ?></td>
                        <td><?php echo $model->order_date ?></td>
                        <td></td>
                     </tr>
         
                    <tr>
                      <td>Name:</td>
                      <td><?php echo $model->product ?></td>
                    </tr>

                    <tr>
                      <td>Quantity:</td>
                      <td><?php echo $model->quantity ?></td>
                    </tr>

                    <tr>
                      <td>Unit:</td>
                      <td><?php echo $model->unit ?></td> 
                    </tr>

                    <tr>
                      <td>Price:</td>
                      <td><?php echo $model->price ?></td> 
                    </tr>

                    <tr>
                      <td>Location:</td>
                      <td><?php echo $model->location ?></td> 
                    </tr>

                    <tr>
                      <td>Date Ordered:</td>
                      <td><?php echo $model->order_date ?></td> 
                    </tr>
                   
                    
                   </table>
                    <h2>Seller details</h2>
                    <table class="table" style="2px">
                     <tr>
                        <th>Name</th>
                        <th>Phonenumber</th>
                        <th>Email</th>
                        <th>Product sold</th>
                        <th>Quantity</th>
                        <th>Unit</th>
                        <th>Price</th>
                        <th>Date posted</th>
                       
                       
                     </tr>
                     <tr>
                        <td><?php echo $model->name ?></td>
                        <td><?php echo $model->phone ?></td>
                        <td><?php echo $model->email ?></td>
                        <td><?php echo $model->product ?></td>
                        <td><?php echo $model->quantity ?></td>
                        <td><?php echo $model->unit ?></td>
                        <td><?php echo $model->price ?></td>
                        <td><?php echo $model->date ?></td>
                     </tr>
                    
                   </table>
               </div>
           </div>
           <div class="row"></div>

        

    </div>
</body>
</html>
