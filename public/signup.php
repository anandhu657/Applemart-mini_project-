<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="./css/signin.css">
</head>
<body>
    
    <div class="container">
        <div class="form-container" style="border:none; top:0;">
        <h2 class="form-head">Signup</h2>
            <form action="signup_a.php" class="signin-form" method="POST" autocomplete="off">
                <input type="text" name="fname" placeholder="Fullname" max="15" required>
                <input type="email" name="email" placeholder="Email Id" max="15" required>
                <input type="number" name="phn" placeholder="Phone Number" required>
                <input type="password" name="pass1" placeholder="Password" required>
                <!-- <input type="password" name="pass2" placeholder="Confirm Password" required> -->
                <input type="text" name="city" placeholder="City" requied>
                <input type="text" name="address" placeholder="Address" required>
                <input type="text" name="locality" placeholder="Locality" required>
                <input type="text" name="pincode" placeholder="Pincode" required>
                <input type="submit" name="submit" value="signup" class="form-submit" style="top:30px;">
            </form>
        </div>
        <a href="../index.php" class="already">i am already a member</a>
    </div>

</body>
</html>