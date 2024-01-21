<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Classes;
use PDO;
use PDOException;
/**
 * Description of DBConnector
 *
 * @author Chalitha
 */
class DBConnector {
    //put your code here
    
    private $host ="localhost";
    private $db_name ="citymetromovers";
    private $db_user ="root";
    private $db_pw ="";
    
    public function getConnection(){
        
        $dsn ="mysql:host=$this->host;dbname=$this->db_name";
        
        try{
           $con = new PDO($dsn, $this->db_user, $this->db_pw); 
           return $con;
        }
       catch (PDOException $exc){
           
           die($exc->getMessage());
       }
    }

}
