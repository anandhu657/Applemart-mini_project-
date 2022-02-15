<html>
    <head>
        <title>Thank You</title>
        <style>
            body{
                text-align: center;
                margin: 0;
                font-size: 1.2rem;
            }
            .block{
                width: 50%;
                display: block;
                margin: auto;
                
            }
            .block p{
                float: left;
            }
            b{
                float: left;
                padding-left: 40px;
                font-size: 1.3rem;
            }
        </style>
    </head>
    <body>
<?php

    require_once('../private/initialize.php');
    require_once('../private/shared_folder/navbar.php');

    session_start();
    $uid = $_SESSION['user_id'];

    if(isset($_POST['submit'])) {
        $sub = [];

        $sub['user_id'] = $uid;
        $sub['name'] = $_POST['fname'];
        $sub['phn'] = $_POST['phn'];
        $sub['address'] = $_POST['address'];
        $sub['pin'] = $_POST['pin'];
        $sub['locality'] = $_POST['locality'];
        $sub['place'] = $_POST['place'];
        $sub['state'] = $_POST['state'];
        $sub['type'] = $_POST['type'];
        $sub['alt_phn'] = $_POST['alt'];
        $sub['landmark'] = $_POST['land'];

        $result = insert_delivery_details($sub);

        if($result) {
    
        ?>  
            <h1>Thank You</h1>
            <div class="block">
                <h1><?php echo $sub['name']; ?></h1>
                <p><b>Address:</b> <?php echo $sub['address']; ?></p>
                <p><b>Phn:</b> <?php echo $sub['phn']; ?></p>
                <p><b>Pincode:</b> <?php echo $sub['pin']; ?></p>
                <p><b>Locality:</b> <?php echo $sub['locality']; ?></p>
                <p><b>City:</b> <?php echo $sub['place']; ?></p>
                <p><b>Landmark:</b> <?php echo $sub['landmark']; ?></p>
                <p><b>State:</b> <?php echo $sub['state']; ?></p>
                <p><b>Type:</b> <?php echo $sub['type']; ?></p>
                <p><b>Alt_phn:</b> <?php echo $sub['alt_phn']; ?></p>
            </div>

    <?php
        }
        else{
            //INSERT failed
            echo mysqli_error($db);
            db_disconnect($db);
            exit;
        }
    }

    require_once('../private/shared_folder/footer.php');
    ?>

</body>
</html>