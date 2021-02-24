<?php

$host = 'pma.gsp-europe.net';
$user = '5509_blogphp';
$pass = 'Stanislav1234';
$db_name = '5509_blogphp';

$conn = mysqli_connect($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}
?>