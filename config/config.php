<?php
include 'view/includes/session.php';
include_once './controller/Controller.php';
$controller = new Controller();

//Error Messaging
if($controller->GetProperties()->debugging == 1){
    error_reporting(E_ALL);
    ini_set("display_error", $controller->GetProperties()->debugging);
    include 'view/includes/error_handler.php';
}