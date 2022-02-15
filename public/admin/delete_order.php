<?php

    require_once('../../private/initialize.php');

    $sql = "DELETE FROM delivery_details WHERE delivery_id='".$_GET['id']."'";
    if(mysqli_query($db, $sql)){
        header("Location: delivery_view.php");
    }
    else{
        echo "Error deleting: " .mysqli_error($db);
    }
    mysqli_close($db);
?>