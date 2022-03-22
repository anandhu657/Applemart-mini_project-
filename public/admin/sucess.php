<?php

    require_once('../../private/initialize.php');

    // <h1>Product Added Successfully</h1>

    if(isset($_POST['submit'])) {


        $sub = [];
        $sub['model'] = $_POST['model'];
        $sub['price'] = $_POST['price'];
        $sub['color'] = $_POST['color'];
        $sub['display'] = $_POST['display'];
        $sub['chip'] = $_POST['chip'];
        $sub['memory'] = $_POST['memory'];
        $sub['camera'] = $_POST['camera'];
        $sub['fcamera'] = $_POST['fcamera'];
        $sub['qty'] = $_POST['qty'];

        if($_FILES["image"]["error"] === 4) {
            echo
            "<script> alert('Image Does Not Exist'); </script>"
            ;
        }
        else {
            $fileName = $_FILES["image"]["name"];
            $fileSize = $_FILES["image"]["size"];
            $tmpName = $_FILES["image"]["tmp_name"];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));
            if(!in_array($imageExtension, $validImageExtension)) {
                echo
                "<script> alert('Invalid Image Extension'); </script>"
                ;
            }
            elseif($fileSize > 1000000){
                echo
                "<script> alert('Image size is too large'); </script>"
                ;
            }
            else{
                $newImageName = uniqid();
                $newImageName .= '.' .$imageExtension;

                move_uploaded_file($tmpName, 'img/' . $newImageName);

                $result = insert_product_values($sub, $newImageName);
                
                if($result) {
                    echo
                    "<center><h1> PRODUCT ADDED SUCCESSFULLY </h1>
                    <a href='add.php'>Add New</a>
                    <a href='admin.php'>go back</a></center>"
                    ;
                }
                else{
                    //INSERT failed
                    echo mysqli_error($db);
                    db_disconnect($db);
                    exit;
                }
               
            }
        }
    }