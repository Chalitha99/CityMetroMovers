<?php

namespace Classes;
use Classes\login_classes;
include "../message.php";
class loginCntrl extends login_classes
{
    private $user_email ;
    private $user_password ;

    public function __construct($user_email,$user_password){

        $this->user_email = $user_email;
        $this->user_password = $user_password;

    }

    public function loginUser(){

        if(!$this->emptyInput()){
            $_SESSION['message'] = "Empty user input";
            header("Location: ../signIn.php?error=empty_input");

            exit();
        }

        if(!$this->emailCheck()){
            $_SESSION['message'] = "user not found";
            header("Location: ../signIn.php?error=user_not_found");
            exit();
        }

        if(!$this->statusCheck()){
            $_SESSION['message'] = "Sorry You have been banned from using this site";
            header("Location: ../signIn.php?error=Banned_user");
            exit();
        }

        $this->getUser($this->user_email,$this->user_password);
    }

    private function emptyInput(){
        if(empty($this->user_email) || empty($this->user_password)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function emailCheck(){
        if($this->userEmail($this->user_email)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }

    private function statusCheck(){
        if($this->userStatus($this->user_email)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }


}