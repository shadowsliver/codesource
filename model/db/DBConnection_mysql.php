<?php
include 'AbstractDBConnection.php';

class DBConnection extends AbstractDBConnection
{

    private $user;
    private $password;
    private $databaseName;
    private $port;
    private $conn;

    public function __construct($user, $password, $databaseName, $port)
    {
        $this->user = $user;
        $this->password = $password;
        $this->databaseName = $databaseName;
        $this->port = $port;
        $this->CreateConnection();
    }

    protected function CreateConnection()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=$this->databaseName", $this->user, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // geeft fouten in sql weer
    }

    public function GetAllRecords($table)
    {
        $sql = "SELECT * FROM $table";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        return $statement;
    }

}