<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['username'])){
            $username = htmlspecialchars($_GET['username']);
            echo "<h2>Welcome, $username!</h2>";
        }else{
            ?>
                <h1>User Registration</h1>
                <form method="GET">
                    <label for="username">Enter your name:</label><br>
                    <input type="text" id="username" name="username" required>
                    <button type="submit">Register</button>
                </form>
            <?php
        }
    ?>
</body>
</html>