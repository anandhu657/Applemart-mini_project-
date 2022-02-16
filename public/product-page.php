<?php

    require_once('../private/initialize.php');
    require_once('../private/shared_folder/navbar.php');

    session_start();

    $uid = $_SESSION['user_id'];

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
    <?php
        if(count($_GET) > 0){
            if(isset($_GET['image'])){
                $name = $_GET['image'];
                $rows = find_product_by_name($name);
            }

            if(isset($_GET['button'])){
                $name = $_GET['search'];
                $rows = find_product_by_name($name);
            }

            if(isset($_GET['button1'])){
                $id = $_GET['search'];
                $rows = find_product_by_id($id);
            }
        }
        else{
            echo "Oops 404 Error found";
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
                    <form action="form.php">
                        <input type="hidden" value="<?php echo $row['model_name']; ?>">
                        <button value="<?php echo $row['pro_id']; ?>" 
                        name="button">BUY</button>
                        <!-- <button name="button1" class="cart" value="<?php echo $row['pro_id']; ?>"
                        formaction="<?php echo 'cart.php'; ?>">Add to cart</button> -->
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
                        <td><?php echo $row['memory']; ?> GB</td>
                    </tr>
                    <tr>
                        <th>Camera</th>
                        <td><?php echo $row['camera']; ?></td>
                    </tr>
                    <tr>
                        <th>Front camera</th>
                        <td><?php echo $row['front_camera']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="border">
        <hr>
    </div>
    <?php endforeach; ?>

    <?php

        require_once('../private/shared_folder/footer.php');
        
    ?>
</body>
</html>