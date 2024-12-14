<?php

spl_autoload_register(function($class_name){

    require 'classes/' . $class_name . '.php';
});

$england = new Country ("England");
$germany= new Country ("Germany");
$spain = new Country ("Spain");
$france = new Country ("France");




//! ENGLAND CLUBS 

$manchester = new Club ("Manchester United ", 1878, $england );
$manchesterCity = new Club ("Manchester City ", 1880, $england );
$liverpool= new Club ("Liverpool ", 1892, $england );

//! FRANCE CLUBS 

$manchester = new Club ("Manchester United ", 1878, $england );
$manchesterCity = new Club ("Manchester City ", 1880, $england );
$liverpool= new Club ("Liverpool ", 1892, $england );

//!GERMANY CLUBS 

$manchester = new Club ("Manchester United ", 1878, $england );
$manchesterCity = new Club ("Manchester City ", 1880, $england );
$liverpool= new Club ("Liverpool ", 1892, $england );

//! SPAIN CLUBS 

$manchester = new Club ("Manchester United ", 1878, $england );
$manchesterCity = new Club ("Manchester City ", 1880, $england );
$liverpool= new Club ("Liverpool ", 1892, $england );




$rooney = new Player ("Wayne", "Rooney", "Center Forward", 39, $england);
$ronaldo = new Player ("Christiano", "Ronaldo", "Forward", 28, $england);
$pogba = new Player ("Paul", "Pogba", "Center Back", 27, $england);
$virgin = new Player ("Virgin", "Van Dijk", "Defender", 26, $england);
$robert = new Player ("Robert", "Lewandowski", "Middle", 29, $england);

$c1 = new Career ($manchester, $rooney, 13);
$c2 = new Career ($manchester, $ronaldo, 5);
$c3 = new Career ($manchester, $pogba, 3);
$c4 = new Career ($manchester, $virgin, 8);
$c5 = new Career ($manchester, $robert, 9);





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <h1>COUNTRIES</h1>
    <div class="container">
        <div class="card">
            <?php echo $england -> countryInfo();?>
        </div>
        <div class="card">
            <?php echo $france -> countryInfo();?>
        </div>
        <div class="card">
            <?php echo $germany -> countryInfo();?>
        </div>
        <div class="card">
            <?php echo $spain -> countryInfo();?>
        </div>

    </div>
</body>
</html>


<!-- // echo $england -> countryInfo();

// // var_dump($england);



// echo $manchester -> clubInfo(); -->


