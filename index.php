<?php
include_once 'config/config.php';
$page = 'home'; // de 'index' pagina

$controller->GetProperties()->stylesheets =  array(
    "style.css"
);
$controller->GetProperties()->javascript_top = array(
    "assets/js/html5shiv.js"
);
$controller->GetProperties()->javascript_bot = array(
    "assets/javascript/jquery.min.js", "assets/javascript/bootstrap.min.js"
);

if(!empty($_GET['page'])){
    $page = $_GET['page'];
}else{
    $controller->CallFunction()->redirect("index.php?page=$page");
}

include_once 'view/templates/page.tpl.php';