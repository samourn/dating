<?php

//Start the session
session_start();

//Require the autoload file
require_once ('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Set debug level
$f3->set('DEBUG', 3); //0(off), 3(max)

//Define a default route
$f3->route('GET /', function() {
    $template = new Template();
    echo $template->render('pages/home.html');
}
);

//Run Fat-Free
$f3->run();
?>