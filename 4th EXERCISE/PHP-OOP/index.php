<?php

spl_autoload_register(function($class_name){

    require 'classes/' . $class_name . '.php';
});

$england = new Country ("England");
$Germany= new Country ("Germany");
$Spain = new Country ("Spain");
$France = new Country ("France");





$manchester = new Club ("Manchester United", 1878, $england );
$manchesterCity = new Club ("Manchester City", 1880, $england );
$liverpool= new Club ("Liverpool", 1892, $england );

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


echo $england -> countryInfo();

// var_dump($england);



echo $manchester -> clubInfo();


