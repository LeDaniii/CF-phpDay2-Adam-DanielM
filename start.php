<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="start.php" method="post">
        Name: <input type="text" name="name">
        Age: <input type="text" name="age">
        <input type="submit" name="submit">
    </form>
    <?php 
    
    if(isset($_POST['submit']))
    {
        if($_POST['name'] && $_POST['age'])
 {
    echo "Your name is " . $_POST['name'] . "and you are " . $_POST['age'] . "years old." ;
    } else {
        echo "fields are invalid";
    }
}
    ?>
</body>

</html>