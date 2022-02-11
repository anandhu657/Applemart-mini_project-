<?php

    require_once('../../private/initialize.php');

    // <h1>Product Added Successfully</h1>

    if(isset($_POST['submit'])) {

        $model = $_POST['model'];
        $price = $_POST['price'];
        $color = $_POST['color'];
        $display = $_POST['display'];
        $chip = $_POST['chip'];
        $memory = $_POST['memory'];
        $camera = $_POST['camera'];
        $fcamera = $_POST['fcamera'];

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
                $query = "INSERT INTO `product` (`model_name`, `price`, `color`, `display`, `chip`, `memory`, `camera`, `front_camera`, `image`) VALUES('$model', '$price', '$color', '$display', '$chip', '$memory', '$camera', '$fcamera', '$newImageName')";
                $result = mysqli_query($db, $query);
                if($result) {
                    echo
                    "<center><h1> PRODUCT ADDED SUCCESSFULLY </h1>
                    <a href='add.php'>Add New</a></center>"
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