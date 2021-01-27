<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reva_student_fees_details";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}







?>