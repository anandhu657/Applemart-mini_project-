<?php

    require_once('../private/initialize.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppleMart</title>

    <link rel="stylesheet" href="./css/style.css">
    
</head>
<body>

<?php

    session_start();
    $id = $_SESSION['user_id'];
    $row = find_user_info($id);

?>
    
    <div class="main">
        
        <form action="product-page.php" method="GET">
        <div class="navbar">
            
            <div class="icon">
                <h2 class="logo">APPLEMART</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="https://www.apple.com/in/">HOME</a></li>
                    <li><a href="https://www.apple.com/in/search/services?src=globalnav">SERVICES</a></li>
                    <li><a href="https://www.apple.com/in/contact/">CONTACT</a></li>
                    <li><a href="https://www.apple.com/in/search/help?src=globalnav">HELP</a></li>
                    <li><a href="https://www.apple.com/in/search/about-apple?src=serp">ABOUT</a></li>
                </ul>
            </div>

            <div class="search">
                <input type="text" class="srch" name="search" placeholder="Type To Search">
                <button class="btn" formaction="product-page.php" name="button">Search</button>
            </div>

            <div class="signin">
                <button class="btn" formaction="./logout.php">Logout</button>
            </div>
     
            <div class="slideshow">
                <img src="./images/slide1.jpg" alt="slide-image" class="slideimg">
                <img src="./images/slide2.png" alt="slide-image" class="slideimg">
                <img src="./images/slide3.jpg" alt="slide-image" class="slideimg">
                <img src="./images/slide4.png" alt="slide-image" class="slideimg">
            </div>
        </div>      
       
        <div class="content">

            <div class="content-single-box">
                <h2 class="content-head-single">iPhone 13 Pro</h2>
                <div class="img-single-div">
                    <?php
                        $image = 'iphone 13 pro';
                    ?>
                    <a href="<?php echo 'product-page.php?image='.$image.'&id='.$id; ?> ">
                        <img src="./images/iphone_13_pro.jpg" alt="iphone-13-pro" 
                            class="content-img-single">
                    </a>
                    
                    <button type="submit" value="<?php echo $image; ?>" 
                    formaction="form.php" name="button" class="buy-btn">Buy</button>
                </div>
            </div>

            <div class="content-menu">
                <ul class="menu-list">
                    <li><a href="product-page.php?image=iphone 13 pro">iPhone 13 pro</a></li>
                    <li><a href="product-page.php?image=iphone 13">iPhone 13</a></li>
                    <li><a href="product-page.php?image=iphone 12 pro">iPhone 12 pro</a></li>
                    <li><a href="product-page.php?image=iphone 12">iPhone 12</a></li>
                    <li><a href="product-page.php?image=iphone 11 pro">iPhone 11 pro</a></li>
                    <li><a href="product-page.php?image=iphone 11">iPhone 11</a></li>
                </ul>
            </div>

            <div class="content-double">
                <div class="content-double-box">
                    <div class="img-double-div">
                        <h2 class="content-head-double">iPhone 13</h2>
                        <img src="./images/iphone_13.jpg" alt="iphone-13" 
                        class="content-img-double">
                        
                        <?php
                            $image = 'iphone 13';
                        ?>

                        <button type="submit" value="<?php echo $image; ?>"
                        name="button" formaction="form.php" class="buy-btn-double">Buy</button>
                        <a href="<?php echo 'product-page.php?image='.$image.'&id='.$id; ?>">
                            <p class="specification">Specifications</p>
                        </a>
                    </div>
                </div>

                <div class="content-double-box box-two">
                    <div class="img-double-div">
                        <h2 class="content-head-double head-two">iPhone 13 mini</h2>
                        <img src="./images/iphone_13_mini.png" alt="iphone-13" 
                        class="content-img-double">
                        
                        <?php
                            $image = 'iphone 13 mini';
                        ?>

                        <button type="submit" value="<?php echo $image; ?>"
                        class="buy-btn-double" name="button" formaction="form.php">Buy</button>
                        <a href="<?php echo 'product-page.php?image='.$image.'&id='.$id; ?>">
                            <p class="specification">Specifications</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="content-single-box">
                <div class="image-single-div-two">

                        <?php
                            $image = 'iphone 12 pro';
                        ?>

                    <a href="<?php echo 'product-page.php?image='.$image.'&id='.$id; ?>">
                    <img src="./images/iphone_12_pro.jpg" alt="iphone_12_pro" 
                    class="content-img-single-two">
                    </a>

                    <h2 class="content-head-single-two">iPhone 12 Pro</h2>

                    <button type="submit" value="<?php echo $image; ?>"
                    name="button" formaction="form.php" class="buy-btn-single-two">Buy</button>
                </div>
            </div>

            <div class="content-flex">
                <div class="content-flex-box">
                    <div class="content-flex-image">

                        <?php
                            $image = 'iphone 13 pro max';
                        ?>

                        <a href="<?php echo 'product-page.php?image='.$image.'&id='.$id; ?>">
                        <img src="./images/iphone_13_pro_max.jpeg" alt="iphone-13-pro-max" class="flex-image">
                        <!-- <h2 class="flex-head">iPhone 12</h2> -->
                        </a>
                        <!-- <input type="submit" value="Buy" class="flex-buy"> -->
                    </div> 
                </div>

                <div class="content-flex-box">
                    <div class="content-flex-image">

                        <?php
                            $image = 'iphone 12 pro max';
                        ?>

                        <a href="<?php echo 'product-page.php?image='.$image.'&id='.$id; ?>">
                            
                        <img src="./images/iphone_12_pro_max.jpeg" alt="iphone-12-pro-max" class="flex-image">
                        <!-- <h2 class="flex-head">12 mini</h2> -->
                        </a>
                        <!-- <input type="submit" value="Buy" class="flex-buy"> -->
                    </div> 
                </div>

                <div class="content-flex-box">
                    <div class="content-flex-image">

                        <?php
                            $image = 'iphone 11 pro max';
                        ?>
    
                        <a href="<?php echo 'product-page.php?image='.$image.'&id='.$id; ?>">
                        <img src="./images/iphone_11_pro_max.jpeg" alt="iphone-11-pro-max" class="flex-image">
                        <!-- <h2 class="flex-head">13 pro max</h2> -->
                        </a>
                        <!-- <input type="submit" value="Buy" class="flex-buy"> -->
                    </div> 
                </div>

            </div>
                        
        </div>

        <?php

            require_once('../private/shared_folder/footer.php');
        
        ?>
            
        </div>
        </form>

    </div>


<!-- Javascript for slideshow -->

    <script>

        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("slideimg");
            for(i=0;i<x.length;i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if(myIndex > x.length) {
                myIndex = 1;
            }
            x[myIndex-1].style.display = "block";
            setTimeout(carousel, 4000);
        }

    </script>
</body>
</html>