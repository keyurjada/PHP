<?php
    session_start();
    $timeout_duration = 60; 
    if (isset($_SESSION['last_activity'])) {
        $elapsed_time = time() - $_SESSION['last_activity'];
        if ($elapsed_time > $timeout_duration) {
            session_unset();
            session_destroy();
            header("Location: logout.php");
            exit();
        }
    }
    $_SESSION['last_activity'] = time();
    echo "Welcome! You are logged in. Session timeout is set to " . ($timeout_duration / 60) . " minutes.";
?>