<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 2/6/19
 * Time: 8:05 PM
 */

class Database
{
    //DB Params
    private $host ='localhost';
    private $db_name ='myblog';
    private $username ='phpmyadmin';
    private $password ='12122';
    private $conn;

    //DB Connect
    public function connect()
    {
        $this->conn = null;

        try{
            $this->conn = new PDO('mysql:host='.$this->host . ';dbname=' . $this->db_name,
                $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            echo 'Connection Error: ' . $e->getMessage();
        }

        return $this->conn;
    }
}