<h1>POO ENTERPRISE</h1>


<?php

//? require "Enterprise.php";
 //# This is ok but it can be super annoying if you have more than that 

//? require "Employe.php"; 
//# same for this 


//# There is something called spl_autoload_register, its a way to let php automatically call upon a already defined function, so lets say you want to call upon your different clases you have and php needs to locate it, instead of manually typing inclue/require this and that u make a function on which php will rely on to generate the name of files etc you have 

spl_autoload_register(function($class_name) {
    require $class_name. 'php'; //! this is when u dont have folder with every class u got!!

    //TODO require 'classes/' . $class_name . '.php';  THIS IS WHEN U HAVE A FOLDER  
})

$elanFormation = new Enterpise("ELAN FORMATION", "1993-01-01", "14 rue du Rhone", "67100", "Strasbourg")

echo $elanFormation-> getRaisonSociale();