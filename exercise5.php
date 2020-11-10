<?php  

$servername = "localhost";
$username = "root";
$password = "" ;
$dbname = "exercise4";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
$sql = "create table Users (
    user_id int(6) auto_increment primary key,
    firstname varchar(20) not null,
    lastname varchar(20) not null,
    email varchar(20),
    reg_date timestamp
    )";
if (mysqli_query($conn, $sql)) {
    echo "Table Users created successfully!";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
?>