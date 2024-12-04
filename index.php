<h1>POO ENTERPRISE</h1>


<?php

//? require "Enterprise.php";
 //# This is ok but it can be super annoying if you have more than that 

//? require "Employe.php"; 
//# same for this 


//# There is something called spl_autoload_register, its a way to let php automatically call upon a already defined function, so lets say you want to call upon your different clases you have and php needs to locate it, instead of manually typing inclue/require this and that u make a function on which php will rely on to generate the name of files etc you have 

spl_autoload_register(function($class_name) {

    require 'classes/' . $class_name . '.php'; //! this is when u dont have folder with every class u got!!

    //TODO require 'classes/' . $class_name . '.php';  THIS IS WHEN U HAVE A FOLDER  
});

$elanFormation = new Enterprise("ELAN FORMATION", "1993-07-01", "14 rue du Rhone", "67100", "Strasbourg"); //# Here we gave the values to our attributes, notice how we construct the values, we put them in order, code is like cooking, follow the recipe step by step in correct order and you wont burn down the kitchen

//* echo $elanFormation -> getRaisonSociale(). " was created in " . $elanFormation-> getDateCreation()->format("d/m/Y"). " the enterprise is located here: " . $elanFormation -> getAdresseComplete();
 //# This how u do it but theres a better way to do it, will be marked with <HERE> in Enterprise.php

//  echo $elanFormation;

echo $elanFormation;







// $elanFormation->setRaisonSociale("Nouveau nom");   btw this is how u change the value, u use setter
// echo $elanFormation->getRaisonSociale();


// var_dump($elanFormation);