<html>

<body>


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
    
$sql = "select user_id, lastname, firstname from users";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
    printf("ID=%s %s (%s)<br>", $row["user_id"], $row["lastname"], $row["firstname"]);
} 
echo "Fetched data successfully";
mysqli_free_result($result);
mysqli_close($conn);

?>
</body>

</html>