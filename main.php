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
                <input type="text" class="srch" name="" placeholder="Type To Search">
                <a href="#"><button class="btn">Search</button></a>
            </div>

            <div class="signin">
                <a href="#"><button class="btn">Signin</button></a>
            </div>

        </div>

        <div class="slideshow">
            <img src="./images/navbar1.jpg" alt="slide-image" class="slideimg">
            <img src="./images/navbar2.png" alt="slide-image" class="slideimg">
            <img src="./images/navbar3.jpg" alt="slide-image" class="slideimg">
            <img src="./images/navbar4.png" alt="slide-image" class="slideimg">
        </div>

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