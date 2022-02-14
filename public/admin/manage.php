<?php

    require_once('../../private/initialize.php');

    $query = "SELECT * FROM product";
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
            <th>Model name</th>
            <th>Price</th>
            <th>Colour</th>
            <th>Display</th>
            <th>Chip</th>
            <th>Memory</th>
            <th>Camera</th>
            <th>Front_camera</th>
            <th>Image</th>
            <th>&nbsp</th>
            <th>&nbsp</th>
        </tr>

        <?php

        $i = 0;
        while($row = mysqli_fetch_array($result)) {
        
        ?>

        <tr>
            <td><?php echo $row['model_name']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['color']; ?></td>
            <td><?php echo $row['display']; ?></td>
            <td><?php echo $row['chip']; ?></td>
            <td><?php echo $row['memory']; ?></td>
            <td><?php echo $row['camera']; ?></td>
            <td><?php echo $row['front_camera']; ?></td>
            <td><?php echo $row['image']; ?></td>
            <td><a href="<?php echo 'edit.php?id='.$row['pro_id']; ?>" >Edit</td>
            <td><a href="<?php echo 'delete.php?id='.$row['pro_id']; ?>" >Delete</a></td>
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