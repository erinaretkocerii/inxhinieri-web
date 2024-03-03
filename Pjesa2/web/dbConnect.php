<?php 


class dbConnect{
    private $server="localhost";
    private $username="root";
    private $password="";
    private $database="testweb";


    function connectDB(){
        try{
            $conn= new PDO("mysql:host=$this->server;dbname=$this->database", $this->username, $this->password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
            echo "Connection successful!";
        }
        catch(PDOException $e){
            echo "Database Connection Failed!".$e->getMessage();
            return null;
        }
    }
}

?>