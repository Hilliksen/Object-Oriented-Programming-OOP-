
<h1>EXERCISE LIVRE</h1>

<h2>EXERCISE : You have an author that has written books, display 4 of his books with the title, date of publishing, how many pages it has and how much does it cost . Good luck</h2>



<h2>SOLUTION : </h2>
<?php

spl_autoload_register(function($class_name) {

    require 'classes/'  . $class_name . '.php';
    //! for explanation look at index.php in 1st EXERCISE
});


$Stephen = new Author ("Stephen","King","21-09-1947","Portland USA",);

$It = new Book ("IT","1986", 1138, 20, $Stephen);
$Sematary = new Book ("Sematary","1983", 374, 15, $Stephen);
$TheStand= new Book ("The Stand","1978", 823, 14, $Stephen);
$TheShinning = new Book ("The Shinning", "1977", 447, 16, $Stephen);


echo $Stephen -> getInfos();