<?php

    require_once('../private/initialize.php');

    session_start();
    $id = $_SESSION['user_id'];
    $sql = "SELECT * FROM product";
    $result = mysqli_query($db,$sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">AppleMart</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-3">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CONTACT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">HELP</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php">CART</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      <button class="btn btn-warning my-2 my-sm-0 ml-2" type="submit"
      formaction="logout.php">SIGN OUT</button>
    </form>

    <div class="form-inline my-2 my-lg-0 ml-3">
      <a href="cart.php" style="color:#ffffff">
        <i class="bi bi-cart4" style="font-size:30px;"></i>
        <?php 
          echo (isset($_SESSION['cart_items']) && count($_SESSION['cart_items'])) > 0 ? count($_SESSION['cart_items']):'';
        ?>
      </a>
    </div>
  </div>
</nav>

<div class="slideshow">
  <img src="./images/slide1.jpg" alt="slide-image" class="slideimg">
  <img src="./images/slide2.png" alt="slide-image" class="slideimg">
  <img src="./images/slide3.jpg" alt="slide-image" class="slideimg">
  <img src="./images/slide4.png" alt="slide-image" class="slideimg">
</div>


<div class="container mt-100">
    <div class="row">
        <?php
            while($row = mysqli_fetch_array($result)){
        ?>
        <div class="col-md-4 col-sm-6">
            <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                    <div class="inner">
                        <div class="main-img"><img src="admin/img/<?php echo $row['image']; ?>" alt="Category"></div>
                        <div class="thumblist">
                            <img src="admin/img/<?php echo $row['image']; ?>" alt="Category">
                            <img src="admin/img/<?php echo $row['image']; ?>" alt="Category">
                        </div>
                    </div>
                </a>
                <div class="card-body text-center">
                    <h4 class="card-title"><?php echo $row['model_name']; ?></h4>
                    <p class="text-muted">₹<?php echo $row['price']; ?></p>
                    <a class="btn btn-outline-primary btn-sm" name="button1"
                    href="<?php echo 'product-page.php?pid='.$row['pro_id']; ?>" data-abc="true">View Products</a>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</div>

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