<?php

    require_once('../../private/initialize.php');

    if(isset($_GET['id'])) {
        $result = find_product_by_id($_GET['id']);
        $row = mysqli_fetch_array($result);
    }
    
    if(isset($_POST['submit'])) {


        $sub = [];
        $sub['pro_id'] = $_POST['pro_id'];
        $sub['model'] = $_POST['model'];
        $sub['price'] = $_POST['price'];
        $sub['color'] = $_POST['color'];
        $sub['display'] = $_POST['display'];
        $sub['chip'] = $_POST['chip'];
        $sub['memory'] = $_POST['memory'];
        $sub['camera'] = $_POST['camera'];
        $sub['fcamera'] = $_POST['fcamera'];

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

                $result = update_product_values($sub, $newImageName);
                
                if($result) {
                    echo
                    header("Location: manage.php")
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
?>

    
<html>
    <head>
        <title>Edit</title>
        <style>
            form{
                width: 50%;
                margin: auto;
                text-align: center;
                font-weight: bold;
            }
            input{
                margin: auto;
                display: block;
            }
        </style>
    </head>
    <body>
        <form action="#" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="pro_id" value="<?php echo $row['pro_id']; ?>">

            Model Name:<input type="text" name="model" 
                    value="<?php echo $row['model_name']; ?>"> <br>

            Price: <input type="number" name="price" 
                    value="<?php echo $row['price']; ?>" > <br>

            Color: <input type="text" name="color" 
                    value="<?php echo $row['color']; ?>"> <br>

            Display: <input type="text" name="display" 
                    value="<?php echo $row['display']; ?>"> <br>

            Chip: <input type="text" name="chip" 
                    value="<?php echo $row['chip']; ?>"> <br>

            Memory: <input type="text" name="memory"
                    value="<?php echo $row['memory']; ?>"> <br>

            Camera: <input type="text" name="camera"
                    value="<?php echo $row['camera']; ?>"> <br>
            
            front_cam: <input type="text" name="fcamera"
                    value="<?php echo $row['front_camera']; ?>"> <br>
                
            image: <input type="file" accept=".png, .jpeg, .jpg" name="image"> <br><br>


                    <input type="submit" value="submit" name="submit">
        </form>
    </body>
</html>