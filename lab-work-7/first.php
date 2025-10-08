<form method="POST">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Login</button>
</form>
<?php
    session_start();
    $valid_username = "keyurbhai";
    $valid_password = "Keyur@13";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        if ($username === $valid_username && $password === $valid_password) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            echo "Login successful! Welcome, " . htmlspecialchars($username);
        } else {
            echo "Invalid username or password.";
        }
    }
?>