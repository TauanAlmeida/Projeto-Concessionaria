<?php

namespace App\classes;
require_once 'config/config.php';


class Connection {
    private $driver;
    private $host;
    private $user;
    private $pass;
    private $database;
    private $charset;
    
    public function __construct() {
        //Vacia variabes constantes
        $this->driver   = 'mysql';
        $this->host     = HOSTNAME;
        $this->user     = DB_USER;
        $this->pass     = DB_PASSWORD;
        $this->database = DB_NAME;
        $this->charset  = DB_CHARSET;
    } 
       
    public function getConnection(){
        try {
            $conn = new \PDO($this->driver.":host=".$this->host.";dbname=".$this->database.";charset=".$this->charset, $this->user, $this->pass);
            $conn->setAttribute(\PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
//          $db->setAttribute(PDO::ATTR_PERSISTENT, true);
            return $conn;
            
        } catch (PDOException $exc) {
            echo $exc->getTraceAsString();
            print "Error: ".$exc->getMessage();
            return null;
        }
    }
}