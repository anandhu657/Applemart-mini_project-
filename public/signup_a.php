<?php

    require_once('../private/initialize.php');

    extract($_POST);
    $query = "SELECT * FROM register WHERE email='$email'";
    $sql = mysqli_query($db, $query);
    if(mysqli_num_rows($sql) > 0){
        // echo "Email Id Already Exists";
        echo
            "<script> alert('Email ID Already Exists'); </script>"
        ;
        exit;
        
    }
    elseif(isset($_POST['submit'])){
        $query = "INSERT INTO register(username, email, phone, passwords, address) VALUES ('$fname', '$email', '$phn', 'md5($pass1)','$address')";
        $sql = mysqli_query($db, $query) or die("Could Not Perform the query");
        echo "<script> alert('Signup success')
            window.location.href = '../index.php'</script>";
        // header("Location: ../index.php?status=success");
    }
    else{
        echo "Error. Please try again";
    }

?>