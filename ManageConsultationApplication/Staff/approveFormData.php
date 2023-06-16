<?php


class approveFormData
{
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $servername;
    private $conn;

    public function __construct()
    {
    }

    public function read($key, $tablename) //read data based on tablename, and konsultasiID
    {
        $host = 'localhost';
        $dbname = 'munakahat';
        $username = 'root';
        $password = '';
        // Create connection
        $conn = new mysqli($host, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // echo "Connected successfully";

        $sql = "SELECT * FROM $tablename WHERE konsultasiID = '$key'";
        $result = mysqli_query($conn, $sql);

        return $result;
    }

    public function update()
    {
    }

    public function insert()
    {
    }

    public function delete()
    {
    }
}
