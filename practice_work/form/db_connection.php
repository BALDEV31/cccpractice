<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ccc_practice";

$conn = mysqli_connect($servername,$username,$password,$database);
if($_SERVER["REQUEST_METHOD"] == "POST"){
if ($conn) {
    echo "connected";
}
}
?>