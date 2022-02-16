<?php

    require_once('../private/initialize.php');
    require_once('../private/shared_folder/navbar.php');
    session_start();
    $uid = $_SESSION['user_id'];

    if(isset($_GET['button1'])){
        $pro_id = $_GET['button1'];

        $query1 = "SELECT pro_id, model_name, price FROM product WHERE pro_id = '$pro_id'";
        $result1 = mysqli_query($db, $query1);
        $sub = [];
        $i = 0;
        while($row1 = mysqli_fetch_array($result1)){
            $sub['pro_id'] = $row1['pro_id'];
            $sub['model_name'] = $row1['model_name'];
            $sub['price'] = $row1['price'];
        }

        $query = "SELECT pro_name FROM cart WHERE user_id = '$uid'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_array($result);
            if($sub['model_name'] != $row['pro_name']){
        
                $result2 = insert_product_cart($sub, $uid);
            
        
            }
        
        
            $query3 = "SELECT * FROM cart WHERE user_id = '$uid'";
            $result3 = mysqli_query($db, $query3);

            if(mysqli_num_rows($result3) > 0) {

?>
<html>
    <head>
        <title>Cart</title>
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
<table>
    <tr>
        <th>Model name</th>
        <th>Price</th>
    </tr>

<?php
                $i = 0;
                while($row = mysqli_fetch_array($result3)) {
?>

<tr>
<td>
    <form action="#">
    <input type="hidden" name="search" value="<?php echo $row['pro_id']; ?>">
    <button formaction="product-page.php" name="button1" ><a><?php echo $row['pro_name']; ?></a></button></td>
<td><?php echo $row['pro_price']; ?></td>
<td><a href="<?php echo 'delete_cart.php?cid='.$row['cid']; ?>">Delete</a></td>
</tr>




<?php
    $i++;
    }
    }else{
        echo 'error';
    }
    
}
?>
</table>
