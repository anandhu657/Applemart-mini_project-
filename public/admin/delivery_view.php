<?php

require_once('../../private/initialize.php');

if(isset($_GET['orders'])){
    $ord = false;
    $result = view_placed_orders();
}
else{
    $ord = true;
    $result = view_orders();
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>Manage Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <?php

    if (mysqli_num_rows($result) > 0) {

    ?>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Order_id</th>
                    <th scope="col">Order_Date</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">Locality</th>
                    <th scope="col">Landmark</th>
                    <th scope="col">Pin</th>
                    <th scope="col">Phone</th>
                    <th scope="col">State</th>
                    <th scope="col">Delivery Point</th>
                    <th scope="col">Pro_id</th>
                    <th scope="col">Pro_name</th>
                    <th scope="col">Pro_qty</th>
                    <th scope="col">Price</th>
                    <th scope="col">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <th scope="row"><?php echo $row['or_id']; ?></th>
                    <td><?php echo $row['date_of_order']; ?></td>
                    <td><?php echo $row['uname']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['locality']; ?></td>
                    <td><?php echo $row['landmark']; ?></td>
                    <td><?php echo $row['pincode']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['state']; ?></td>
                    <td><?php echo $row['delivery_point']; ?></td>
                    <td><?php echo $row['pro_id']; ?></td>
                    <td><?php echo $row['model_name']; ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td>$<?php echo $row['price']; ?></td>
                    <?php if($ord == true){ ?>
                        <td><a href="<?php echo 'delete_order.php?id=' . $row['or_id']; ?>">Delivered</a></td>
                    <?php } ?>
                </tr>
            <?php
                $i++;
                }
            ?>
            </tbody>
        </table>

    <?php
    }
    ?>
    <h5 class="text-center"><a href="<?php echo 'delivery_view.php?orders=placed'; ?>">Placed orders</a></h5>
    <h5 class="text-center"><a href="admin.php">Go Back</a></h5>

</body>

</html>