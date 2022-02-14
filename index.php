<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="public/css/signin.css">

</head>

<body>
    <div class="container">
        <div class="form-container">
            <h2 class="form-head">Signin</h2>
            <form action="./public/signin-process.php" method="POST" class="signin-form" enctype="multipart/form-data">
                <input type="email" name="email" placeholder="Username"><br><br>
                <input type="password" name="pass" placeholder="Password"><br>
                <a href="#" class="forgot-link">Forgotten password?</a>
                <input type="submit" name="submit" value="login" class="form-submit">
                <hr>
                <button class="form-create" formaction="public/signup.php">Create New Account</button>
            </form>
        </div>
    </div>
</body>
</html>