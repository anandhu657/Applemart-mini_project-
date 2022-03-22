<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/add.css">
</head>
<body>
    <div class="container">
        <h1>Add Product</h1>
        <div class="form">
            <form action="sucess.php" method="POST" autocomplete="off" enctype="multipart/form-data">
                <div class="input-field">
                    <input type="text" placeholder="Model Name" name="model" required>
                    <input type="number" placeholder="Price" name="price" required>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Colour" name="color" required>
                    <input type="text" placeholder="Display" name="display" required>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Chip" name="chip" required>
                    <input type="text" placeholder="Memory" name="memory" required>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Camera" name="camera" required>
                    <input type="text" placeholder="Front Camera" name="fcamera" required>
                </div>
                <div class="input-field">
                    <input type="Number" placeholder="Quantity" name="qty" required>
                </div>
                <div class="input-field">
                    <label for="image">Image:</label>
                    <input type="file" accept=".png, .jpeg, .jpg" name="image" required>
                </div>
                <div class="input-submit">
                    <input type="submit" value="submit" name="submit">
                </div>
                <div class="home-link">
                    <!-- <a href="../main.php">Go to Home</a> -->
                    <a href="admin.php">Go Back</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>