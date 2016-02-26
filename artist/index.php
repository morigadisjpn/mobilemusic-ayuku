<?php

require '../api/config.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();

//== REDIRECT PORPUSE ONLY === PLEASE DELETE IT
$app->get('/:arg', function ($arg) {
    header("Location: " . SITE_URL."/#/artist/".$arg."/id/na",true,301);
    die();
});

$app->run();

