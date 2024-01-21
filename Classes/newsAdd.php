<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Classes;
require './Classes/DBConnector.php';
use Classes\DBConnector;
use PDO;

use PDOException;


class newsAdd {
    
    private $box;
    private $topic;
    private $message;
    
    public function __construct($box,$topic,$message) {
        $this->box = $box ;
        $this->topic=$topic;
        $this->message=$message;
    }
    
  
    public function newsAdder(){
        
           $dbcon =new DBConnector();
           
           $con = $dbcon ->getConnection();
           $query ="UPDATE news SET News_topic=?,News_description=? WHERE newsBox=?";
           
           try{
              $pstmt =$con->prepare($query);
              
              $pstmt->bindValue(1, $this->topic);
              $pstmt->bindValue(2, $this->message);
              $pstmt->bindValue(3, $this->box);
              
              $pstmt->execute();
              
              if($pstmt->rowCount()>0){
                   header("Location:newfeed.php?success=1");
              }
              
              else{
                   header("Location:newfeed.php?success=2");
              }
           }
           catch (PDOException $exc){
               echo $exc->getMessage();
           }
          }
          
          
     public static function newsGetter($Box){
         
         $dbcon1 =new DBConnector();
         $con = $dbcon1 ->getConnection();
         
         
         
          if($Box=="1") {
                    
              try{
               
              $query ="SELECT News_topic,News_description FROM news WHERE newsBox=1";
              
                      
              $pstmt =$con->prepare($query);
              $pstmt->execute();
              
              $rs1 =$pstmt->fetch(PDO::FETCH_OBJ);
              
             $News_topic = $rs1 ->News_topic;
             $News_description =$rs1 ->News_description;
              
             $news_array = array($News_topic,$News_description);
             
             return $news_array;
            } 
    
             catch (PDOException $exc){
               echo $exc->getMessage();
           }  
   }         
             
            if($Box=="2") {
                    
              try{
               
              $query ="SELECT News_topic,News_description FROM news WHERE newsBox=2";
              
                      
              $pstmt =$con->prepare($query);
              $pstmt->execute();
              
              $rs2 =$pstmt->fetch(PDO::FETCH_OBJ);
              
             $News_topic = $rs2 ->News_topic;
             $News_description =$rs2 ->News_description;
              
             $news_array = array($News_topic,$News_description);
             
             return $news_array;
            } 
    
             catch (PDOException $exc){
               echo $exc->getMessage();
           }  
   } 
   
   
   
              if($Box=="3") {
                    
              try{
               
              $query ="SELECT News_topic,News_description FROM news WHERE newsBox=3";
              
                      
              $pstmt =$con->prepare($query);
              $pstmt->execute();
              
              $rs3 =$pstmt->fetch(PDO::FETCH_OBJ);
              
             $News_topic = $rs3 ->News_topic;
             $News_description =$rs3 ->News_description;
              
             $news_array = array($News_topic,$News_description);
             
             return $news_array;
            } 
    
             catch (PDOException $exc){
               echo $exc->getMessage();
           }  
   }   
 }   
  
}