<?php 

    require_once('../private/initialize.php');
    require_once('../private/shared_folder/navbar.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="./css/form.css">
</head>
<body>
    <?php
        $id = $_GET['button'];
        $results = find_product_by_id($id);
    ?>
    <div class="container">
        

            <div class="user-details">
                <h4>Add an address</h4>
                <form action="#" autocomplete="off">
                    <div class="input-field">
                        <input type="text" placeholder="Name" name="fname" required>
                        <input type="number" placeholder="10-digit Number" name="phn" required>
                    </div>
                    <div class="input-field">
                        <input type="number" placeholder="Pincode" name="pin" required>
                        <input type="text" placeholder="Locality" name="locality" required>
                    </div>
                    <div>
                        <input type="text" placeholder="Address (Area and Street)" name="address" 
                        class="address-field" required>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="City/District/Town" name="place" required>
                        <select name="state" class="option-field">
                            <option value="kerala">Kerala</option>
                            <option value="tamilnadu">Tamilnadu</option>
                            <option value="karnataka">Karnataka</option>
                            <option value="goa">Goa</option>
                            <option value="telugana">Telugana</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Landmark" name="land">
                        <input type="number" placeholder="Alternate Phone" name="alt">
                    </div>
                    <div class="delivery-spot">
                        <input type="radio" value="home" name="type" checked>
                        <label for="type">Home (All day delivery) </label>
                        <input type="radio" value="work" name="type">
                        <label for="type">Work (Delivery between 10 AM - 5 PM)</label>
                    </div>
                    <div class="submit">
                        <input type="submit" value="Deliver Here">
                    </div>
                </form>
            </div>

            <?php
                if(mysqli_num_rows($results) > 0){
            ?>

            <div class="phn-price-details">
                <h3>Price Details</h3>
                <div class="phn-price">
                    <?php
                        $row = mysqli_fetch_array($results);
                    ?>
                    <h4><?php echo $row['model_name']; ?></h4>
                    <div class="prices">
                        <p>Price</p>
                        <p><?php echo $row['price']; ?></p>
                        <p>Delivery Charge</p>
                        <p>FREE</p>
                    </div>
                </div>
                <div class="total-price">
                    <h4>Total Payable</h3>
                    <h4>₹<?php echo $row['price']; ?></h3>
                </div>
    
            </div>
            <?php
            }
            else{
                echo "no result";
            }
            ?>
    </div>
    <?php

        require_once('../private/shared_folder/footer.php');
            
    ?>
</body>
</html>