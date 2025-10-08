<?php
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown IP';
    $request_method = $_SERVER['REQUEST_METHOD'] ?? 'Unknown Method';
    $request_uri = $_SERVER['REQUEST_URI'] ?? 'Unknown URI';
    echo "<h2>Request Information</h2>";
    echo "<p><strong>IP Address:</strong> $ip</p>";
    echo "<p><strong>Request Method:</strong> $request_method</p>";
    echo "<p><strong>Requested URI:</strong> $request_uri</p>";
?>