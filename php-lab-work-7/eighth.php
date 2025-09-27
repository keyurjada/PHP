<?php
    $app_env = $_ENV['APP_ENV'] ?? 'development';
    $db_configs = [
            'development' => [
            'host' => 'localhost',
            'user' => 'root',
            'password' => '',
            'dbname' => 'mysql',
        ],
    ];
    $db_config = $db_configs[$app_env];
    $mysqli = new mysqli(
        $db_config['host'],
        $db_config['user'],
        $db_config['password'],
        $db_config['dbname']
    );
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } else {
        echo "Connected to " . $app_env . " database successfully!";
    }
?>