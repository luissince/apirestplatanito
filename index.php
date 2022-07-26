<?php


require_once "controllers/routes.controller.php";
require_once "models/connection.php";


$index = new RoutesController();
$index ->index();