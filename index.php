<?php 

require_once 'init.php';

$router = Factory:getInstance('Router');

$app = new App($router);
$app->execute();