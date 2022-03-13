<html>
<head>
<style>
.navbars{
    position: sticky;
    top: 0;
    left: 0; 
    width: 100%;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>
</head>
<body>

<div class="navbars">
    <ul>
    <li><a href="#" onclick="myFunction()">Home</a></li>
    <!-- <li><a href="#news">News</a></li> -->
    <!-- <li><a href="#contact">Contact</a></li> -->
    <li style="float:right">
        <a class="active" href="#" onclick="logFunction()">Sign out</a>
    </li>
    </ul>
</div>
<script>
    function myFunction(){
        location.replace("main.php");
    }
    function logFunction(){
        location.replace("logout.php");
    }
</script>

</body>
</html>