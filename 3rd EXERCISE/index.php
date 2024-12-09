<h1>EXERCISE BANK</h1>

<?php

spl_autoload_register (function ($class_name){

    require 'classes/'. $class_name . '.php';
});

$Joseph = ["Joseph", "Smith", "1985-05-28", "Washington", 2 ];

var_dump($Joseph);