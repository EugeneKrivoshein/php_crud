<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'crudbd';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) die("Fatal Error" . mysqli_connect_error());
//echo 'connect successfully';
