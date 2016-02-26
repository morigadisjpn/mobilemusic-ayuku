<?php

require_once '../api/config.php';
 
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();

//== REDIRECT PORPUSE ONLY === PLEASE DELETE IT

// add article location in configuration
$app->config(array(
   'templates.path' =>   './templates',
   'article.path'   =>   './articles'   // location of articles
));

$app->get('/:arg', function ($arg) {
    header("Location: " . SITE_URL."/#/artist/".$arg."/id/na",true,301);
    die();
});

$app->run();

