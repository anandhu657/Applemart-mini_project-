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
        <div class="form-container">
        <h2 class="form-head">Signup</h2>
            <form action="#" class="signin-form" method="POST">
                <input type="text" name="fname" placeholder="Fullname" max="15" required>
                <input type="text" name="uname" placeholder="Username" max="15" required>
                <input type="number" name="phn" placeholder="Phone Number" max="12" required>
                <input type="password" name="pass1" placeholder="Password" required>
                <input type="password" name="pass2" placeholder="Confirm Password" required>
                <input type="submit" name="submit" value="Signup" class="form-submit" 
                formaction="./signin.php">
            </form>
        </div>
    </div>

</body>
</html>