<!DOCTYPE html>
<html lang="en">

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

$cars = array(
    'rentc1'=> array(
        "availabe" => "yes",
        "brand" => "Audi",
        "model" => "E-tron GT",
        "price" => 120,
        "location" => "vienna",
        "img" => "./img/audietrongt.jpg"
    ), 
    'rentc2'=> array(
        "availabe" => "yes",
        "brand" => "Audi",
        "model" => "S7",
        "price" => 90,
        "location" => "vienna",
        "img" => "./img/audis7.jpg"
    ),
    'rentc3'=> array(
        "availabe" => "yes",
        "brand" => "BMW",
        "model" => "m5",
        "price" => 110,
        "location" => "vienna",
        "img" => "./img/bmwm5.jpg"
    ),
    'rentc4'=> array(
        "availabe" => "yes",
        "brand" => "Polestar",
        "model" => "Polestar 2",
        "price" => 120,
        "location" => "vienna",
        "img" => "./img/polestar2.jpg"
    ),
    'rentc5'=> array(
        "availabe" => "yes",
        "brand" => "Porsche",
        "model" => "Tayacan",
        "price" => 160,
        "location" => "vienna",
        "img" => "./img/porschetayacan.jpg"
    ),
    'rentc6'=> array(
        "availabe" => "yes",
        "brand" => "Seat",
        "model" => "Cupra Leon",
        "price" => 70,
        "location" => "vienna",
        "img" => "./img/seatleon.jpg"
    ),
    'rentc7'=> array(
        "availabe" => "yes",
        "brand" => "Tesla",
        "model" => "Model 3",
        "price" => 120,
        "location" => "vienna",
        "img" => "./img/teslamodel3.webp"
    )
    );

// $keys = array_keys($cars);
// for($i=0; $i<count($cars); $i++){
//     for($)
//     echo ('<div class="card" style="width: 18rem;">
//   <img src= "'.[$cars[$i]["img"]].'" class="card-img-top" alt="...">
//   <div class="card-body">
//     <h5 class="card-title">Card title</h5>
//    '.$cars["rentc1"]["model"].'
//   </div>');
// }

// $keys = array_keys($cars);
foreach($cars as $car) {
    // foreach($car as $key => $value) {
        echo $car['availabe'];
        // break;
    // }
}

?>


</body>

</html>


foreach($cars as $car){
foreach($car as $key => $value){
echo $key . ': ' .$value . '<br>\n';
}
}