<?php
function get_connection(): mysqli
{
    $host = "localhost";
    $username = "root";
    $password = "dualipin";
    $dbname = "sigepia";
    $conn = new mysqli($host, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("" . $conn->connect_error);
    }
    return $conn;
}