<?php

$conn = null;

$host = getenv('MYSQLHOST');
$user = getenv('MYSQLUSER');
$pass = getenv('MYSQLPASSWORD');
$db   = getenv('MYSQLDATABASE');

if (!empty($host) && !empty($user) && !empty($db)) {

    $conn = new mysqli($host, $user, $pass, $db);

    if (!$conn->connect_error) {
        $conn->set_charset("utf8mb4");
    }
}

?>