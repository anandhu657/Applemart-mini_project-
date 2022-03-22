<?php

    require_once('../../private/initialize.php');

    $or_id = $_GET['id'];

    $sql = "UPDATE orders SET status = 1 WHERE or_id = '$or_id'";
    if(mysqli_query($db, $sql)){
        header("Location: delivery_view.php");
    }
    else{
        echo "Error deleting: " .mysqli_error($db);
    }
    mysqli_close($db);
?>