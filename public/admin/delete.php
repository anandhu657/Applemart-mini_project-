<?php

    require_once('../../private/initialize.php');

    $sql = "DELETE FROM product WHERE pro_id='".$_GET['id']."'";
    if(mysqli_query($db, $sql)){
        header("Location: manage.php");
    }
    else{
        echo "Error deleting: " .mysqli_error($db);
    }
    mysqli_close($db);
?>

