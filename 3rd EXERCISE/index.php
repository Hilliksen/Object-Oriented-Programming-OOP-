<h1>EXERCISE BANK</h1>

<?php

spl_autoload_register (function ($class_name){

    require 'classes/'. $class_name . '.php';
});

$Joseph = new Client ("Joseph", "Smith", 43, "Washington");

$saving = new Account("Savings", 9230.32, "euros", $Joseph );
$spending = new Account("Spendings", 1257.86, "euros", $Joseph);


echo $Joseph -> getInfos();