<?php

    require_once('../private/initialize.php');
    require_once('../private/shared_folder/cart_header.php');

    session_start();

    $uid = $_SESSION['user_id'];

    
    if(count($_GET) > 0){

        if(isset($_GET['pid'])){
            $id = $_GET['pid'];
            $rows = find_product_by_id($id);
        }
    }
    else{
        echo "Oops 404 Error found";
    }


    if(isset($_POST['add_to_cart']) && $_POST['add_to_cart'] == 'add to cart')
    {
        $productID = intval($_POST['product_id']);
        $productQty = intval($_POST['product_qty']);
        
        $sql = find_product_by_id($productID);

        
        $fetchProduct = $sql -> fetch_assoc();

        $qty = $fetchProduct['qty'];

        if($productQty > $qty){
            echo "<script>window.alert('Only $qty quantity of products is available now')</script>";
        }
        else
        {
            $calculateTotalPrice = number_format($productQty * $fetchProduct['price'],2);
            
            $cartArray = [
                'product_id' =>$productID,
                'qty' => $productQty,
                'product_name' =>$fetchProduct['model_name'],
                'product_price' => $fetchProduct['price'],
                'total_price' => $calculateTotalPrice,
                'product_img' =>$fetchProduct['image']
            ];
            
            if(isset($_SESSION['cart_items']) && !empty($_SESSION['cart_items']))
            {
                $productIDs = [];
                foreach($_SESSION['cart_items'][$uid] as $cartKey => $cartItem)
                {
                    $productIDs[] = $cartItem['product_id'];
                    if($cartItem['product_id'] == $productID)
                    {
                        $_SESSION['cart_items'][$uid][$cartKey]['qty'] = $productQty;
                        $_SESSION['cart_items'][$uid][$cartKey]['total_price'] = $calculateTotalPrice;
                        break;
                    }
                }

                if(!in_array($productID,$productIDs))
                {
                    $_SESSION['cart_items'][$uid][]= $cartArray;
                }

                $successMsg = true;
                
            }
            else
            {
                $_SESSION['cart_items'][$uid][]= $cartArray;
                $successMsg = true;
            }
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iphone</title>
    <link rel="stylesheet" href="css/product.css">
</head>
<body>

    <?php if(isset($successMsg) && $successMsg == true){?>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo $fetchProduct['model_name']?> is added to cart. <a href="cart.php" class="alert-link">View Cart</a>
                </div>
            </div>
        </div>

    <?php 
    }
    ?>
    
    <?php 
    foreach($rows as $row) : 
    ?>
    <div class="container">
        <div class="image-sec">
            <img src="admin/img/<?php echo $row['image']; ?>" alt="iphone">
        </div>
        <div class="details">
            <div class="product-name">
                <h1>Apple <?php echo $row['model_name']; ?></h1>
                <a href="https://www.apple.com/in/">Visit the site</a>
            </div>
            <hr>
            <div class="product-price">
                <div class="price-details">
                    <h2>MRP: ₹<?php echo $row['price']; ?></h2>
                    <p><i>Inclusive of all taxes</i></p>
                    <p><strong>EMI</strong> starts at ₹1,789. No Cost EMI available EMI</p>
                    <p>7-days replacement only.</p>
                    <strong>FREE DELIVERY</strong>
                </div>
                <div class="price-button">
                    <form  method="POST">
                        Quantity: <input type="number" name="product_qty" id="productQty" placeholder="Quantity" min="1" max="1000" value="1">
                        <input type="hidden" name="product_id" value="<?php echo $row['pro_id']; ?>">
                        <button type="submit" name="buy" value="buy" formaction="checkout.php">BUY</button>
                        <button type="submit" name="add_to_cart" value="add to cart">Add to Cart</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="product-details">
                <table>
                    <tr>
                        <th>Model</th>
                        <td><?php echo $row['model_name']; ?></td>
                    </tr>
                    <tr>
                        <th>color</th>
                        <td><?php echo $row['color']; ?></td>
                    </tr>
                    <tr>
                        <th>Display</th>
                        <td><?php echo $row['display']; ?></td>
                    </tr>
                    <tr>
                        <th>Chip</th>
                        <td><?php echo $row['chip']; ?></td>
                    </tr>
                    <tr>
                        <th>Memory</th>
                        <td><?php echo $row['memory']; ?> ROM</td>
                    </tr>
                    <tr>
                        <th>Camera</th>
                        <td><?php echo $row['camera']; ?></td>
                    </tr>
                    <tr>
                        <th>Front camera</th>
                        <td><?php echo $row['front_camera']; ?> Front</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
    <?php endforeach; ?>

    <?php

        require_once('../private/shared_folder/cart_footer.php');
        
    ?>
</body>
</html>