<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="theme">Choose Theme:</label>
        <select name="theme" id="theme">
            <option value="light">Light</option>
            <option value="dark">Dark</option>
        </select>
        
        <label for="language">Choose Language:</label>
        <select name="language" id="language">
            <option value="en">English</option>
            <option value="es">Spanish</option>
        </select>
        <button type="submit">Save Preferences</button>
    </form>
</body>
</html>
<?php
    $theme = 'light';
    $language = 'en';
    if(isset($_COOKIE['preferred_theme'])){
        $theme = $_COOKIE['preferred_theme'];
    }
    if(isset($_COOKIE['preferred_language'])){
        $language = $_COOKIE['preferred_language'];
    }
    echo "Current theme: $theme<br>";
    echo "Current language: $language<br>";
?>
<?php
    if(isset($_POST['theme'])){
        $theme = $_POST['theme'];
        setcookie('preferred_theme', $theme, time() + (30 * 24 * 60 * 60), "/");
    }
    if(isset($_POST['language'])){
        $language = $_POST['language'];
        setcookie('preferred_language', $language, time() + (30 * 24 * 60 * 60), "/");
    }
?>