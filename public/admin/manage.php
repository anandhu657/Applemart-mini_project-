<?php

    require_once('../../private/initialize.php');

    
    $result = view_products();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Manage Product</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        
    <?php

    if(mysqli_num_rows($result) > 0) {

    ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Pro_id</th>
                    <th scope="col">Model_name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Colour</th>
                    <th scope="col">Display</th>
                    <th scope="col">Chip</th>
                    <th scope="col">Memory</th>
                    <th scope="col">Camera</th>
                    <th scope="col">Front_camera</th>
                    <th scope="col">Image</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <th scope="row"><?php echo $row['pro_id']; ?></th>
                    <td><?php echo $row['model_name']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['color']; ?></td>
                    <td><?php echo $row['display']; ?></td>
                    <td><?php echo $row['chip']; ?></td>
                    <td><?php echo $row['memory']; ?></td>
                    <td><?php echo $row['camera']; ?></td>
                    <td><?php echo $row['front_camera']; ?></td>
                    <td><img src="./img/<?php echo $row['image']; ?>" style="width:50px;height:50px;"></td>
                    <td><?php echo $row['qty']; ?></td>
                    <td><a href="<?php echo 'edit.php?id='.$row['pro_id']; ?>" >Edit</td>
                    <td><a href="<?php echo 'delete.php?id='.$row['pro_id']; ?>" >Delete</a></td>
                    
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
    <h5 class="text-center"><a href="admin.php">Go Back</a></h5>

    </body>
</html>