<?php

    require_once('../../private/initialize.php');

    $pro_id = $_GET['id'];

    $sql = "UPDATE product SET status = 1 WHERE pro_id = '$pro_id'";
    if(mysqli_query($db, $sql)){
        header("Location: manage.php");
    }
    else{
        echo "Error deleting: " .mysqli_error($db);
    }
    mysqli_close($db);
?>

