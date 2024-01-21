<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Classes;

require './Classes/DBConnector.php';
use Classes\DBConnector;
use PDOException;
use PDO;

/**
 * Description of Com_modarator
 *
 * @author Chalitha
 */
class Com_modarator {
    //put your code here
    
    private $user_count;
    private $iteraries;
    private $earnings =0;
    


    public function getUser_count() {
          $dbcon =new DBConnector();
          $con = $dbcon->getConnection();
          
           try{
               
              $query ="SELECT COUNT(*) as count FROM user";
              
                      
              $pstmt =$con->prepare($query);
              $pstmt->execute();
              
              $rs1 =$pstmt->fetch(PDO::FETCH_ASSOC);
              $count = $rs1["count"];
              $this->user_count =$count;
              
              
           }
           
           catch (PDOException $exc){
                echo $exc->getMessage();
             }
             
             return $this->user_count;
        
    }

    function getIteraries() {
        
        
        
          $dbcon =new DBConnector();
          $con = $dbcon->getConnection();
          
           try{
              $date=date('Y-m-d'); 
              $query ="SELECT COUNT(*) as count FROM ticket WHERE Ticket_date=?";
              $pstmt =$con->prepare($query);
              $pstmt ->bindValue(1,$date);
              $pstmt->execute();
              
              $rs1 =$pstmt->fetch(PDO::FETCH_ASSOC);
              $count = $rs1["count"];
              $this->iteraries =$count;
              
              
           }
           
           catch (PDOException $exc){
                echo $exc->getMessage();
             }
             
          return $this->iteraries;  
        
    }
        
 

    function getEarnings() {
         $dbcon =new DBConnector();
          $con = $dbcon->getConnection();
          
           try{
              $date=date('Y-m-d'); 
              $query ="SELECT SUM(Ticket_price) AS sum FROM ticket WHERE Ticket_date=?";
              $pstmt =$con->prepare($query);
              $pstmt ->bindValue(1,$date);
              $pstmt->execute();
              
              $rs1 =$pstmt->fetch(PDO::FETCH_ASSOC);
              $this->earnings= $rs1['sum'];
              
             
              
              }
           
           catch (PDOException $exc){
                echo $exc->getMessage();
             }
             
          
        return $this->earnings;
    }
    
}
