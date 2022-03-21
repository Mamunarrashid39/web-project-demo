<?php

namespace DB;
class db
{
    private $dbname="chaldal";
    private $host='localhost';
    private $username='root';
    private $password='';
    public $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);

        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $this->conn;
    }


    public function __destruct(){
        mysqli_close($this->conn);
    }

}