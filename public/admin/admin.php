<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        h1{
            text-align: center;
        }
        button{
            padding: 10px;
            width: 300px;
            background: black;
            color: white;
            margin: 20px auto;
            display: block;
            font-size: 20px;
            border: none;
            cursor: pointer;    
        }
        a{
            display: table;
            margin: auto;
            padding: 20px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Admin</h1>
    <form>
        <button formaction="add.php">Add Product</button>
        <button formaction="manage.php">Manage Product</button>
        <button formaction="delivery_view.php">View Orders</button>
        <button formaction="../logout.php">Logout</button>
    </form>
    <!-- <a href="../main.php">Go to main page</a> -->
</body>
</html>