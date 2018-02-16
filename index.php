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

//Define a personal-info route
$f3->route('GET /personal-info', function() {
    $template = new Template();
    echo $template->render('pages/personal-info.php');
}
);

//Define a profile-info route
$f3->route('GET|POST /profile-info', function() {
    $template = new Template();
    echo $template->render('pages/profile-info.php');
}
);

//Define a interests route
$f3->route('GET|POST /interests', function() {
    $template = new Template();
    echo $template->render('pages/interests.php');
}
);

//Define a profile-summary route
$f3->route('GET|POST /profile-summary', function() {
    $template = new Template();
    echo $template->render('pages/profile-summary.php');
}
);

//Run Fat-Free
$f3->run();
