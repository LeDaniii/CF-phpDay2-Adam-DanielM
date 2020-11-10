<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="exercise3.php" method="post">
        Name: <input type="text" name="n1">
        Age: <input type="text" name="n2">
        <input type="submit" name="submit">
    </form>
    <?php 
    
    

    function math(){
        return ($_POST['n1'] * $_POST['n2']);
    };
    
    if(isset($_POST['submit']))
    {
        if($_POST['n1'] && $_POST['n2'])
 {
    echo math();
    ;
    } else {
        echo "fields are invalid";
    }
}
    ?>
</body>

</html>