<?php  
$empty = false;
$servername = "localhost";
$username = "root";
$password = "" ;
$dbname = "exercise4";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

if(isset($_POST['submit']))
    { if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email'])) {
            $empty = true;
    }
}

$first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
$last_name = mysqli_real_escape_string($conn, $_POST['lastname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
    
if($empty === false) {
$sql = " insert into users (firstname, lastname, email) values ('$first_name', '$last_name', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "new record created";
} else {
    echo "record creation error for: " . $sql . mysqli_error($conn) ;
}
mysqli_close($conn);
} else {
    echo "fill the fields!";
}