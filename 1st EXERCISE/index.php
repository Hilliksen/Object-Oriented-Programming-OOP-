<h1>POO ENTERPRISE</h1>


<?php

//? require "Enterprise.php";
 //# This is ok but it can be super annoying if you have more than that 

//? require "Employe.php"; 
//# same for this 


//# There is something called spl_autoload_register, its a way to let php automatically call upon a already defined function, so lets say you want to call upon your different clases you have and php needs to locate it, instead of manually typing inclue/require this and that u make a function on which php will rely on to generate the name of files etc you have 

spl_autoload_register(function($class_name) {

    require 'classes/'  . $class_name . '.php'; //! this is when u have a folder with every class!!

    //TODO require $class_name . '.php';  THIS IS WHEN U DONT HAVE A FOLDER 
});

//# CREATING VARS 
$elanFormation = new Enterprise("ELAN FORMATION", "1993-07-01", "14 rue du Rhone", "67100", "Strasbourg"); //# Here we gave the values to our attributes, notice how we construct the values, we put them in order, code is like cooking, follow the recipe step by step in correct order and you wont burn down the kitchen

$tf1 = new Enterprise("TF1","1993-07-01", "12 rue du Rhone", "75000", "Paris"); //! lets say you want Stephane to work at a new enterpise 

$poleEmploi = new Enterprise("Pole Emploi","1998-04-15", "50 rue du Rhone", "65240", "Nice");

$Stephane = new Employe("SMAIL", "Stephane", "stephane@example.com");

$Michael = new Employe("MURMANN", "Michael", "michael@example.com");

$c1 = new Contrat($elanFormation, $Stephane, "2020-05-14", "CDI");
$c2 = new Contrat($elanFormation, $Michael, "2021-11-24", "CDD");
$c3 = new Contrat($tf1, $Stephane, "2021-07-27", "Interim");
$c4 = new Contrat($poleEmploi, $Stephane, "2024-04-13", "CDD");
$c5 = new Contrat($poleEmploi, $Michael, "2023-09-03", "CDI");


echo $elanFormation -> afficherEmployes();

echo $tf1 -> afficherEmployes();

echo $poleEmploi -> afficherEmployes();

echo $Stephane -> afficherEnterprise();

echo $Michael -> afficherEnterprise();



//* echo $elanFormation -> getRaisonSociale(). " was created in " . $elanFormation-> getDateCreation()->format("d/m/Y"). " the enterprise is located here: " . $elanFormation -> getAdresseComplete();
 //# This how u do it but theres a better way to do it, will be marked with <HERE> in Enterprise.php



// echo $elanFormation -> afficherEmployes;



// echo $Stephane->getInfos(); //! this is our ancient work place

// $Stephane->setEnterprise($tf1);

// echo $Stephane->getInfos(); //! this is our new work place


// var_dump($Stephane); //IMPO -> ALWAYS USE VAR DUMPS 



// $elanFormation->setRaisonSociale("Nouveau nom");   //# <--------btw this is how u change the value, u use setter
// echo $elanFormation->getRaisonSociale();

