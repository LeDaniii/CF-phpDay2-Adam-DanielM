<?php  

$servername = "localhost";
$username = "root";
$password = "" ;
$dbname = "carrental";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
$sql = "create table rental (
    car_id int auto_increment primary key,
    brand varchar(20) not null,
    model varchar(20) not null,
    available enum('yes', 'no'),
    price int not null,
    location varchar(20) not null,
    img varchar(50)
    )";
if (mysqli_query($conn, $sql)) {
    echo "Table Users created successfully!";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
?>