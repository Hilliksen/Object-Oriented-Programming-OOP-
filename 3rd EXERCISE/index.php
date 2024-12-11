<h1>EXERCISE BANK</h1>

<?php

spl_autoload_register (function ($class_name){

    require 'classes/'. $class_name . '.php';
});

$Joseph = new Client ("Joseph", "Smith", 43, "Washington");

$saving = new Account("Savings", 9230.32, "Euro", $Joseph );
$spending = new Account("Spendings", 1257.86, "Euro", $Joseph);


echo $Joseph -> getInfos();

echo $saving -> getInfos();

echo $saving -> transfer($spending, 230);

echo $saving -> getInfos();
