<h1>EXERCISE BANK</h1>

<h2>EXERCISE : A clients of a bank has 2 accounts (make it so that he can have even more ) and he would like to withdraw deposit or transfer money from one account to the other, you need to display what is the accounts name, who does it belong to (make the code generic so it have multiple different clients) , what are the funds and in what currency. Good luck</h2>


<h2>SOLUTION : </h2>
<?php

spl_autoload_register (function ($class_name){

    require 'classes/'. $class_name . '.php';
});

$Joseph = new Client ("Joseph", "Smith", 43, "Washington");

$saving = new Account("Savings", 9230.32, "Euro", $Joseph );
$spending = new Account("Spendings", 1257.86, "Euro", $Joseph);


echo $Joseph -> getInfos();

echo $saving -> getInfos();

echo $spending -> getInfos();

echo $saving -> transfer($spending, 230);

echo $saving -> getInfos();

echo $spending -> getInfos();