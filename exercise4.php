<?php  

$servername = "localhost";
$username = "root";
$password = "" ;
$dbname = "exercise4";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
$sql = "create database $dbname";
if (mysqli_query($conn, $sql)) {
    echo "Database $dbname created successfully!";
} else {
    echo "Error creating database $dbname: " . mysqli_error($conn);
}
mysqli_close($conn);
?>