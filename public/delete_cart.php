<?php

    require_once('../private/initialize.php');
    session_start();
    $uid = $_SESSION['user_id'];

    $sql = "DELETE FROM cart WHERE cid='".$_GET['cid']."'";
    if(mysqli_query($db, $sql)){
        header("Location: cart.php");
    }
    else{
        echo "Error deleting: " .mysqli_error($db);
    }
    mysqli_close($db);
?>