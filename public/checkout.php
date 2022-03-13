<?php 

  require_once('../private/initialize.php');    
  require_once('../private/helpers.php');
  $pageTitle = 'Demo PHP Shopping cart checkout page with Validation';
	$metaDesc = 'Demo PHP Shopping cart checkout page with Validation';
  session_start();
  $uid = $_SESSION['user_id'];
  include('../private/shared_folder/cart_header.php');


  if(!isset($_SESSION['cart_items']) || empty($_SESSION['cart_items']))
  {
      header('location:index.php');
      exit();
  }

    
  $cartItemCount = count($_SESSION['cart_items']);

    //pre($_SESSION);

?>

<div class="row mt-3">
  <?php
    if(isset($_POST['buy'])){
      $pid = $_POST['product_id'];
      $qty = $_POST['product_qty'];
      $sql = "SELECT * FROM product WHERE pro_id='$pid'";
      $result = mysqli_query($db, $sql);
      $row = mysqli_fetch_array($result);
      $calculateTotalPrice = number_format($qty * $row['price'],2);
      $total = $calculateTotalPrice;
  ?>
      <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your Order</span>
            <span class="badge badge-secondary badge-pill"><?php echo $cartItemCount;?></span>
          </h4>
          <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0"><?php echo $row['model_name'] ?></h6>
                  <small class="text-muted">Quantity: <?php echo $qty ?> X Price: <?php echo $row['price'] ?></small>
                </div>
                <span class="text-muted">₹<?php echo $calculateTotalPrice ?></span>
              </li>
           
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>₹<?php echo $total;?></strong>
            </li>
          </ul>
        </div>
    <?php
    }
    else{
    ?>
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your Order</span>
            <span class="badge badge-secondary badge-pill"><?php echo $cartItemCount;?></span>
          </h4>
          <ul class="list-group mb-3">
            <?php
                $total = 0;
                foreach($_SESSION['cart_items'][$uid] as $key => $cartItem)
                {
                  if(isset($cartItem[$key])){
                    $total+=$cartItem['total_price'];
                  }
            ?>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0"><?php echo $cartItem['product_name'] ?></h6>
                            <small class="text-muted">Quantity: <?php echo $cartItem['qty'] ?> X Price: <?php echo $cartItem['product_price'] ?></small>
                        </div>
                        <span class="text-muted">₹<?php echo $cartItem['total_price'] ?></span>
                    </li>
            <?php
                }
            ?>
           
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>₹<?php echo number_format($total,2);?></strong>
            </li>
          </ul>
        </div>
    <?php
    }
    ?>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <?php 
            if(isset($errorMsg) && count($errorMsg) > 0)
            {
                foreach($errorMsg as $error)
                {
                    echo '<div class="alert alert-danger">'.$error.'</div>';
                }
            }
          ?>
          <form class="needs-validation" action="delivery.php" method="POST">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="fname">First name</label>
                <input type="text" class="form-control" id="firstName" name="fname" 
                placeholder="First Name" value="" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="phn">Mobile Number</label>
                <input type="text" class="form-control" id="phn" name="phn" 
                placeholder="Phone Number" value="" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="place">City/District/Town</label>
              <input type="text" class="form-control" id="place" name="place" 
              placeholder="City/District/Town" value="" required>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="address" 
              placeholder="Address" value="" required>
            </div>

            <div class="mb-3">
              <label for="locality">Locality</label>
              <input type="text" class="form-control" id="locality" name="locality" 
              placeholder="Locality" value="" required>
            </div>

            
            <div class="row">
            <div class="col-md-6 mb-3">
              <label for="land">Landmark</label>
              <input type="text" class="form-control" id="land" name="land" 
              placeholder="Landmark" value="" required>
            </div>

            <div class="col-md-6 mb-3">
              <label for="alt">Alternate Phone</label>
              <input type="Number" class="form-control" id="alt" name="alt" 
              placeholder="Alt Phn" value="" required>
            </div>

              <div class="col-md-6 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" name="state" id="state" >
                  <option value="">Choose...</option>
                  <option value="kerala">Kerala</option>
                  <option value="tamilnadu">Tamilnadu</option>
                  <option value="karnataka">Karnataka</option>
                  <option value="goa">Goa</option>
                  <option value="telugana">Telugana</option>
                </select>
              </div>

              <div class="col-md-6 mb-3">
                <label for="pin">Pincode</label>
                <input type="text" class="form-control" id="pin" name="pin" 
                placeholder="" value="" required>
              </div>

            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Payment Method</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="home" name="type" type="radio" class="custom-control-input" value="home" checked="">
                <label class="custom-control-label" for="home">Home (All day delivery)</label>
              </div>

              <div class="custom-control custom-radio">
                <input id="work" name="type" type="radio" class="custom-control-input" value="work" checked="">
                <label class="custom-control-label" for="work">Work (Delivery between 10 AM - 5 PM)</label>
              </div>
            </div>
           
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="submit" 
            formaction="<?php echo 'delivery.php?pro_id='.$pid; ?>">Continue to checkout</button>
          </form>
        </div>
      </div>

<?php include('../private/shared_folder/cart_footer.php'); ?>