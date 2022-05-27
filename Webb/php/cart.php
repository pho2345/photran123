<!DOCTYPE html>
<html lang="en">
<head>
<title>Nhà sách OnePiece</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
	<script type="text/javascript" language="javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" language="javascript" src="../js/showBook.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/chitietsach.css">
	<script type="text/javascript" language="javascript" src="../js/function.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" language="javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" language="javascript" src="../js/giohang.js"></script>
	<script type="text/javascript" language="javascript" src="../js/jquery.min.js"></script>
	<style>
	body{
    margin-top:20px;
    background:#eee;
}
.ui-w-40 {
    width: 40px !important;
    height: auto;
}

.card{
    box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);    
}

.ui-product-color {
    display: inline-block;
    overflow: hidden;
    margin: .144em;
    width: .875rem;
    height: .875rem;
    border-radius: 10rem;
    -webkit-box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
    box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
    vertical-align: middle;
}

</style>
</head>
<body>

<div class="container px-3 my-5 clearfix">
    <!-- Shopping cart table -->
    <div class="card">
        <div class="card-header">
            <h2>Shopping Cart</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered m-0" style="text-align: center;">
                <thead>
                  <tr>
                    <!-- Set columns width -->
                    <th class="text-right py-3 px-4" style="width: 40px;color:black"></th>
                    <th class="text-center py-3 px-4" style="min-width: 100px;width:100px;color:black">Product Name</th>
                    <th class="text-right py-3 px-4" style="width: 100px;color:black;text-align: center;">Picture</th>
                    <th class="text-right py-3 px-4" style="width: 100px;color:black;text-align: center;">Price</th>                   
                    <th class="text-right py-3 px-4" style="width: 100px;color:black;text-align: center;">Size</th> 
                    <th class="text-center py-3 px-4" style="width: 120px;color:black">Quantity</th>
                    <th class="text-right py-3 px-4" style="width: 100px;color:black;text-align: center;">Total</th>
                    <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                  </tr>
                </thead>
                <tbody>
                  <?php  
                  session_start();
                
                  $dem=0;
                  foreach($_SESSION['cart'] as $value => $cart){
                  ?>
                  <tr id="cart<?php echo $value; ?>">
                    <td style="padding-top:10%"><input type="checkbox" class="checkboxcart" id="checkbox<?php echo $value; ?>" value="<?php echo $value; ?>"></td>
                    <td style="padding-top:10%"><?php echo $cart['name']; ?></td>
                    <td style=""><img style="" src="../images/brand/<?php echo $cart['brand'] ?>/image/<?php echo $cart['name'] ?>/Color_<?php echo $cart['idcolor'] ?>/<?php echo $cart['image'] ?>" class="img-responsive" alt="Image"></td>
                    <td style="padding-top:10%"> <?php echo $cart['price']."$"; ?></td>
                    <td style="padding-top:10%"> <?php echo $cart['size']; ?></td>
                    <td style="padding-top:10%"><?php echo $cart['quantity'];?></td>
                    <td style="padding-top:10%"><?php echo $ok=$cart['price']*$cart['quantity']."$";?></td>
                    <td style="padding-top:9%;width:30px"> <i class="fa fa-trash fa-3x" style="cursor:pointer" onclick="deletecart(<?php echo $value;?>)"></i></td>
                  </tr>
                  <?php
                  }
                ?>
                </tbody>
              </table>
            </div>
            <!-- / Shopping cart table -->
        
            <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
              <div class="mt-4">
                <label class="text-muted font-weight-normal">Promocode</label>
                <input type="text" placeholder="ABC" class="form-control">
              </div>
              <div class="d-flex">
                <div class="text-right mt-4 mr-5">
                  <label class="text-muted font-weight-normal m-0">Discount</label>
                  <div class="text-large"><strong>$20</strong></div>
                </div>
                <div class="text-right mt-4">
                  <label class="text-muted font-weight-normal m-0">Total price</label>
                  <div class="text-large"><strong>$1164.65</strong></div>
                </div>
              </div>
            </div>
        
            <div class="float-right">
              <button type="button" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3">Đặt hàng</button>
              <button type="button" class="btn btn-lg btn-primary mt-2" onclick="testde()">Checkout</button>
            </div>
        
          </div>
      </div>
  </div>

  <div id="parent">
      <p id="child">I'm a child!</p>
  </div>
</body>
</html>