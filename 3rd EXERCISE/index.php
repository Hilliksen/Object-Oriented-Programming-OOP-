<h1>EXERCISE BANK</h1>

<?php

spl_autoload_register (function ($class_name){

    require 'classes/'. $class_name . '.php';
});

$Joseph = ["Joseph", "Smith", "1985-05-28", "Washington", 2 ];

$josephAccounts = [
    ["Savings", 9230.32, "euros", $Joseph ],
    ["Spendings", 1257.86, "euros", $Joseph]
];

var_dump($josephAccounts);