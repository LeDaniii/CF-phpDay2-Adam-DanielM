<?php  

$servername = "localhost";
$username = "root";
$password = "" ;
$dbname = "exercise4";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
$sql = " insert into users (firstname, lastname, email) values ('Whats', 'Up', 'whatsUp@greetings.com')";
if (mysqli_query($conn, $sql)) {
    echo "new record created";
} else {
    echo "record creation error for: " . $sql . mysqli_error($conn) ;
}
mysqli_close($conn);
?>