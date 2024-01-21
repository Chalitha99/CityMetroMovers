<?php

require_once './Classes/newsAdd.php';
use Classes\newsAdd;


if($_SERVER["REQUEST_METHOD"]==="POST"){
    
    if(isset($_POST["submit"])){
        if(!empty($_POST["topic"]) || !empty($_POST["message"])){
            $box =$_POST["Box"];
            $topic =$_POST["topic"];
            $message =$_POST["message"];
         
           $newsAdd = new newsAdd($box,$topic,$message);
           $newsAdd ->newsAdder();
          
           
        }
    }
 else {
     header("Location: newsfeed.php?error=2");   
    }
}

else {
    header("Location: newsfeed.php?error=1");
}


    
  
 
?>