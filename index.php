<?php
/**
 * Alex Grigorenko
 * 1/15/20
 * /328/chicken/index.php
 */

// Turn on error reporting -- this is critical!
ini_set('display_errors',1);
error_reporting(E_ALL);

//Require autoload file
require("vendor/autoload.php");

//Instantiate F3
$f3 = Base::Instance();

//Define a default route
$f3->route("GET /", function (){
    echo "HELLO";
});

//Run f3
$f3->run();