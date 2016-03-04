<?php
include_once './model/db/DBConnection_mysql.php';
include_once './model/Properties.php';
include_once './model/Functions.php';

class Controller
{
    private $db;
    private $properties;
    private $functions;

    public function __construct()
    {
        //$this->db = new DBConnection("root", "root", "vooraad");
        $this->properties = new Properties("nl", "Default Page Title", 1);
        $this->functions = new Functions();
        $this->Handler();
    }

    public function Handler(){

    }

    public function GetDebugging(){
        return $this->properties->debugging;
    }

    public function GetProperties(){
        return $this->properties;
    }

    public function CallFunction(){
        return $this->functions;
    }

    public function GetDatabase(){
        return $this->db;
    }
}