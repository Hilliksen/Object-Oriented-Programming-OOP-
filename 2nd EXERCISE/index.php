
<h1>EXERCISE LIVRE</h1>

<?php

spl_autoload_register(function($class_name) {

    require 'classes/'  . $class_name . '.php';
    //! for explanation look at index.php in 1st EXERCISE
})


$Stephen= new Author ("Stephen","King","21-09-1947","Portland USA",)