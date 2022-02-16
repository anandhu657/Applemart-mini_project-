<?php 

    require_once('../../private/initialize.php');

    $query = "SELECT * FROM delivery_details";
    $result = mysqli_query($db, $query);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Manage Product</title>
    </head>
    <style>
        table, th, td{
            border: 1px solid black;
            padding: 10px;
        }
        table{
            border-collapse: collapse;
        }
    </style>
    <body>

    <?php

    if(mysqli_num_rows($result) > 0) {

    ?>

    <table>
        <tr>
            <th>Delivery ID</th>
            <th>Product</th>
            <th>User ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>City</th>
            <th>Locality</th>
            <th>Landmark</th>
            <th>Pincode</th>
            <th>State</th>
            <th>Phone_Num</th>
            <th>Alt_phn</th>
            <th>Delivery_point</th>
            <th>&nbsp</th>
        </tr>

        <?php

        $i = 0;
        while($row = mysqli_fetch_array($result)) {
        
        ?>

        <tr>
            <td><?php echo $row['delivery_id']; ?></td>
            <td>
                <?php echo $row['pro_id']; ?>
            </td>
            <td><?php echo $row['user_id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['locality']; ?></td>
            <td><?php echo $row['landmark']; ?></td>
            <td><?php echo $row['pincode']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td><?php echo $row['phn_num']; ?></td>
            <td><?php echo $row['alt_phn']; ?></td>
            <td><?php echo $row['delivery_point']; ?></td>
            <td><a href="<?php echo 'delete_order.php?id='.$row['delivery_id']; ?>" >Delete</a></td>
        </tr>
        <?php
        $i++;
        }
        ?>
    </table>

    <?php
    }
    ?>

    </body>
</html>