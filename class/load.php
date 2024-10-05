<?php
session_start();
require "userform.php";
require "userform2.php"; 
require "display.php";
require "pdo.php";  


function classAutoLoad($classname){

    $directories = ["class"];

    foreach($directories AS $dir){
        $filename = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $classname . ".php";
        if(file_exists($filename) AND is_readable($filename)){
            require_once $filename;
        }
    }
}

spl_autoload_register('classAutoLoad');


$userForm = new userform();
$userForm2 = new userform2();
$displayUsers = new display();
