<?php

spl_autoload_register(function($class_name){

    require 'classes/' . $class_name . '.php';
});

//! COUNTRIES 

$england = new Country ("England");
$germany= new Country ("Germany");
$spain = new Country ("Spain");
$france = new Country ("France");




//! ENGLAND CLUBS 

$manchester = new Club ("Manchester United ", 1878, $england );
$manchesterCity = new Club ("Manchester City ", 1880, $england );
$liverpool= new Club ("Liverpool ", 1892, $england );



//! FRANCE CLUBS 

$psg = new Club ("Paris Saint-Germain ", 1970, $france );
$lyon = new Club ("Olympique Lyonnais ", 1950, $france);
$strasbourg = new Club ("Racing Strasbourg ", 1906, $france );

//!GERMANY CLUBS 

$bayern = new Club ("FC Bayern Munchen ", 1900, $germany);
$vfb = new Club ("VFB Stuttgart ", 1893, $germany);
$borussia = new Club ("Borussia Dortmund ", 1909, $germany);
//! SPAIN CLUBS 

$realmadrid = new Club ("Real Madrid ", 1878, $spain );
$barcelona = new Club ("Barcelona ", 1880, $spain );
$valencia= new Club ("Valencia ", 1892, $spain );


$clubs = [$manchester, $manchesterCity, $liverpool, $psg, $lyon, $strasbourg, $bayern, $vfb, $borussia, $barcelona, $realmadrid, $valencia,];


//! PLAYERS 

$rooney = new Player ("Wayne", "Rooney", "Center Forward", 39, $england);
$ronaldo = new Player ("Christiano", "Ronaldo", "Forward", 28, $england);
$pogba = new Player ("Paul", "Pogba", "Center Back", 27, $england);
$virgin = new Player ("Virgin", "Van Dijk", "Defender", 26, $england);
$robert = new Player ("Robert", "Lewandowski", "Middle", 29, $england);


$mbappe = new Player ("Emmanuel", "Mbappe", "Center Forward", 25, $france);
$zidane = new Player ("Zinedine", "Zidane", "Forward", 39, $france);
$benzema = new Player ("Karim", "Benzema", "Center Back", 35, $france);
$kante = new Player ("N'golo", "Kante", "Middle", 24, $france);


$neueur = new Player ("Manuel", "Neuer", "Goal Keeper", 31, $germany);
$kross = new Player ("Toni", "Kross", "Forward", 24, $germany);
$sane = new Player ("Leroy", "Sane", "Center Back", 21, $germany);


$xavi = new Player ("Carlos", "Xavi", "Center Forward", 39, $spain);
$pique = new Player ("Gerard", "Pique", "Forward", 28, $spain);
$ramos = new Player ("Sergio", "Ramos", "Center Back", 27, $spain);
$raul = new Player ("Virgin", "Raul", "Defender", 26, $spain);
$casillas = new Player ("Iker", "Casillas", "Goalkeeper", 29, $spain);


$players = [$rooney, $ronaldo, $pogba, $virgin, $robert, $zidane, $benzema, $kante, $kross, $sane, $xavi,  $pique, $ramos, $raul, $casillas ];



$c1 = new Career ($manchester, $rooney, 13 , "2004-01-01");
$c2 = new Career ($manchester, $ronaldo, 5 , "2007-01-01");
$c3 = new Career ($manchester, $pogba, 3 , "2003-01-01");
$c4 = new Career ($manchesterCity, $virgin, 8 , "2012-01-01");
$c5 = new Career ($manchester, $robert, 9 , "2016-01-01");
$c6 = new Career ($psg, $mbappe, 4 , "2009-01-01");
$c7 = new Career ($manchester, $zidane, 5 , "2014-01-01");
$c8 = new Career ($vfb, $pogba, 3 , "2001-01-01");
$c9 = new Career ($lyon, $benzema, 8 , "2014-01-01");
$c10 = new Career ($psg, $kross, 9 , "2019-01-01");
$c11 = new Career ($bayern, $kante, 13 , "2022-01-01");
$c12 = new Career ($valencia, $raul, 5 , "1989-01-01");
$c13 = new Career ($realmadrid, $ronaldo, 3 , "2001-01-01");
$c14 = new Career ($realmadrid, $ramos, 8 , "2012-01-01");
$c15 = new Career ($barcelona, $pique, 9 , "2007-01-01");
$c16 = new Career ($realmadrid, $casillas, 13 , "2009-01-01");
$c17 = new Career ($bayern, $sane, 5 , "1968-01-01");
$c18 = new Career ($bayern, $pique, 3 , "1989-01-01");
$c19 = new Career ($barcelona, $xavi, 8 , "1999-01-01");
$c20 = new Career ($barcelona, $robert, 9 , "2021-01-01");
$c21 = new Career ($manchester, $casillas, 2 , "2023-01-01");
$c22 = new Career ($liverpool, $sane, 4 , "2017-01-01");
$c23 = new Career ($manchesterCity, $pique, 3 , "2018-01-01");
$c24 = new Career ($manchesterCity, $xavi, 8 , "1997-01-01");
$c25 = new Career ($liverpool, $robert, 9 , "2024-01-01");
$c25 = new Career ($borussia, $robert, 7 , "20021-01-01");





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


        <div class="container">


            <?php 
            //# Instead of doing div for every single club or players you can use foreach loop in php to display waht you want
                foreach ($clubs as $club) { ?>
                    <div class="card">
                        <?= $club -> clubInfo();?>
                    </div>
                <?php } ?>
        </div>



        <div class="container">

            <?php 
            //# Instead of doing div for every single club or players you can use foreach loop in php to display waht you want
                foreach ($players as $player) { ?>
                    <div class="card">
                        <?= $player -> playerInfo();?>
                    </div>
                <?php } ?>
        </div>




</body>
</html>
