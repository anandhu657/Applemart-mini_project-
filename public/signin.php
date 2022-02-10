<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="./css/signin.css">

</head>

<body>
    <div class="container">
        <div class="form-container">
            <h2 class="form-head">Signin</h2>
            <form action="#" method="POST" class="signin-form">
                <input type="text" name="uname" placeholder="Username"><br><br>
                <input type="password" name="pass" placeholder="Password"><br>
                <a href="#" class="forgot-link">Forgotten password?</a>
                <input type="submit" name="submit" value="Log In" class="form-submit">
                <hr>
                <button class="form-create" formaction="./signup.php">Create New Account</button>
            </form>
        </div>
    </div>
</body>
</html>