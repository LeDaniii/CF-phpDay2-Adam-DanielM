
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>
<body>


    <?php  
$empty = false;
$servername = "localhost";
$username = "root";
$password = "" ;
$dbname = "carrental";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
    
$sql = "select* from rental";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
    echo ('<div class="card" style="width: 18rem;">
    <img src= "'.$row['img'].'" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">'.$row['brand'].'</h5>
    '.$row['model'].'
    <p> availible: '.$row['available'].' </p>
    <p> location: '.$row['location'].' </p>
    <p> price: '.$row['price'].' €/day </p>
    </div>');
} 
echo "Fetched data successfully";
mysqli_free_result($result);
mysqli_close($conn);

?>
</body>

</html>