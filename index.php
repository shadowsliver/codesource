<?php
include_once 'includes/config.incl.php';
$page = 'home';

if(!empty($_GET['page'])){
    $page = $_GET['page'];
}else{
    redirect("index.php?page=$page");
}

include_once 'includes/html_top.incl.php';
include_once 'view/'. $page .'.php';
//include_once 'view/openjava.php';
include_once 'includes/html_bot.incl.php';