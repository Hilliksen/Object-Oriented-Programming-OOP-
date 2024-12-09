
<h1>EXERCISE LIVRE</h1>

<?php

spl_autoload_register(function($class_name) {

    require 'classes/'  . $class_name . '.php';
    //! for explanation look at index.php in 1st EXERCISE
});


$Stephen = new Author ("Stephen","King","21-09-1947","Portland USA",);

$It = new Book ("IT","1986", 1138, 20);
$Sematary = new Book ("Sematary","1983", 374, 15);
$TheStand= new Book ("The Stand","1978", 823, 14);
$TheShinning = new Book ("The Shinning", "1977", 447, 16);


echo $Stephen -> getInfos();