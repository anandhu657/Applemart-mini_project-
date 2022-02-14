<?php

    require_once('../private/initialize.php');

    session_start();

    if(isset($_POST['submit'])){
        extract($_POST);
        $query = "SELECT * FROM register WHERE email='$email' AND passwords='md5($pass)'";
        $sql = mysqli_query($db, $query);
        $row = mysqli_fetch_array($sql);
        if(is_array($row)){
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['username'] = $row['username'];
            header("Location: main.php?");
        }
        elseif($email == 'admin@gmail.com' && $pass == 'pass'){
            header("Location: admin/admin.php");
        }
        else{
            header("Location: ../index.php");
        }
    }

?>