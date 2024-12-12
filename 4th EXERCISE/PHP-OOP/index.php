<?php

spl_autoload_register(function($class_name){

    require 'classes/' . $class_name . '.php';
});

$england = new Country ("England");
$manchester = new Club ("Manchester United", 1878, $england );
$manchesterCity = new Club ("Manchester ", 1878, $england );

$rooney = new Player ("Wayne", "Rooney", "Center Forward", 39, $england);

$c1 = new Career ($manchester, $rooney, 13);


var_dump($rooney);


