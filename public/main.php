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
    
    <div class="main">
        
        <form action="#" method="POST">
        <div class="navbar">
            
            <div class="icon">
                <h2 class="logo">APPLEMART</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="#">HELP</a></li>
                    <li><a href="#">ABOUT</a></li>
                </ul>
            </div>

            <div class="search">
                <input type="text" class="srch" name="search" placeholder="Type To Search">
                <button class="btn">Search</button>
            </div>

            <div class="signin">
                <button class="btn" formaction="./signin.php">Signin</button>
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
                    <a href="#">
                        <img src="./images/iphone_13_pro.jpg" alt="iphone-13-pro" 
                            class="content-img-single">
                    </a>
                    
                    <input type="submit" value="Buy" class="buy-btn">
                </div>
            </div>

            <div class="content-menu">
                <ul class="menu-list">
                    <li><a href="#">iPhone 13 pro</a></li>
                    <li><a href="#">iPhone 13</a></li>
                    <li><a href="#">iPhone 12 pro</a></li>
                    <li><a href="#">iPhone 12</a></li>
                    <li><a href="#">iPhone 11 pro</a></li>
                    <li><a href="#">iPhone 11</a></li>
                </ul>
            </div>

            <div class="content-double">
                <div class="content-double-box">
                    <div class="img-double-div">
                        <h2 class="content-head-double">iPhone 13</h2>
                        <img src="./images/iphone_13.jpg" alt="iphone-13" 
                        class="content-img-double">
                        <input type="submit" value="Buy" class="buy-btn-double">
                        <a href="#">
                            <p class="specification">Specifications</p>
                        </a>
                    </div>
                </div>

                <div class="content-double-box box-two">
                    <div class="img-double-div">
                        <h2 class="content-head-double head-two">iPhone 13 mini</h2>
                        <img src="./images/iphone_13_mini.png" alt="iphone-13" 
                        class="content-img-double">
                        <input type="submit" value="Buy" class="buy-btn-double">
                        <a href="#">
                            <p class="specification">Specifications</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="content-single-box">
                <div class="image-single-div-two">
                    <a href="#">
                    <img src="./images/iphone_12_pro.jpg" alt="iphone_12_pro" 
                    class="content-img-single-two">
                    </a>

                    <h2 class="content-head-single-two">iPhone 12 Pro</h2>

                    <input type="submit" value="Buy" class="buy-btn-single-two">
                </div>
            </div>

            <div class="content-flex">
                <div class="content-flex-box">
                    <div class="content-flex-image">
                        <a href="#">
                        <img src="./images/iphone_13_pro_max.jpeg" alt="iphone-13-pro-max" class="flex-image">
                        <!-- <h2 class="flex-head">iPhone 12</h2> -->
                        </a>
                        <!-- <input type="submit" value="Buy" class="flex-buy"> -->
                    </div> 
                </div>

                <div class="content-flex-box">
                    <div class="content-flex-image">
                        <a href="#">
                        <img src="./images/iphone_12_pro_max.jpeg" alt="iphone-12-pro-max" class="flex-image">
                        <!-- <h2 class="flex-head">12 mini</h2> -->
                        </a>
                        <!-- <input type="submit" value="Buy" class="flex-buy"> -->
                    </div> 
                </div>

                <div class="content-flex-box">
                    <div class="content-flex-image">
                        <a href="#">
                        <img src="./images/iphone_11_pro_max.jpeg" alt="iphone-11-pro-max" class="flex-image">
                        <!-- <h2 class="flex-head">13 pro max</h2> -->
                        </a>
                        <!-- <input type="submit" value="Buy" class="flex-buy"> -->
                    </div> 
                </div>

            </div>
                        
        </div>

        <div class="footer">
            
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