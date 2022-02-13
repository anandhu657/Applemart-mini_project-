<?php

    require_once('../private/initialize.php');

    extract($_POST);
    $query = "SELECT * FROM register WHERE email='$email'";
    $sql = mysqli_query($db, $query);
    if(mysqli_num_rows($sql) > 0){
        echo "Email Id Already Exists";
        exit;
    }
    elseif(isset($_POST['submit'])){
        $query = "INSERT INTO register(username, email, phone, passwords) VALUES ('$fname', '$email', '$phn', 'md5($pass1)')";
        $sql = mysqli_query($db, $query) or die("Could Not Perform the query");
        header("Location: ../signin.php?status=success");
    }
    else{
        echo "Error. Please try again";
    }

?>