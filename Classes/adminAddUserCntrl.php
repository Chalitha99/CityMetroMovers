<?php

namespace Classes;
use Classes\DBConnector;
use Classes\adminAddUser_classes;
include '../message.php';

class adminAddUserCntrl extends adminAddUser_classes
{

    private $user_fname ;
    private $user_lname ;
    private $user_email ;
    private $user_contactNo ;
    private $user_nic ;
    private $user_password ;
    private $user_role;
    private $status;

    public function __construct($user_fname,$user_lname,$user_email,$user_contactNo,$user_nic,$user_password,$user_role,$status){

        $this->user_fname = $user_fname;
        $this->user_lname = $user_lname;
        $this->user_email = $user_email;
        $this->user_contactNo = $user_contactNo;
        $this->user_nic = $user_nic;
        $this->user_password = $user_password;
        $this->user_role = $user_role;
        $this->status = $status;
    }

    public function registerUser(){
        if(!$this->emptyInput()){
            $_SESSION['message'] = "Please fill all the fields.";
            header("Location: ../add_register.php?error=empty_input");
            exit();
        }

        if(!$this->invalidEmail()){
            $_SESSION['message'] = "Invalid email.";
            header("Location: ../add_register.php?error=invalid_email");
            exit();
        }

        if(!$this->pwdValid()){
            $_SESSION['message'] = "Invalid password.";
            header("Location: ../add_register.php?error=invalid_password");
            exit();
        }

        if(!$this->phoneValid()){
            $_SESSION['message'] = "Invalid phone number.";
            header("Location: ../add_register.php?error=invalid_phone_number");
            exit();
        }

        if(!$this->nicValid()){
            $_SESSION['message'] = "Invalid NIC number.";
            header("Location: ../add_register.php?error=invalid_nic_number");
            exit();
        }

        if(!$this->userEmailTakenCheck()){
            $_SESSION['message'] = "Email already exist.";
            header("Location: ../add_register.php?error=email_already_exist");
            exit();
        }

        $this->setUser($this->user_fname,$this->user_lname,$this->user_email,$this->user_contactNo,$this->user_nic,$this->user_role,$this->status,$this->user_password);
    }

    private function emptyInput(){
        if(empty($this->user_fname) || empty($this->user_lname) || empty($this->user_email) || empty($this->user_contactNo) || empty($this->user_nic) || empty($this->user_password) || empty($this->status) || empty($this->user_role)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function invalidEmail(){
        if(!filter_var($this->user_email,FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function pwdValid(){
        $min_length = 8; // Minimum password length
        $requires_uppercase = true; // Require at least one uppercase letter
        $requires_lowercase = true; // Require at least one lowercase letter
        $requires_digit = true; // Require at least one digit

        // Regular expressions for character requirements
        $uppercase_regex = '/[A-Z]/';
        $lowercase_regex = '/[a-z]/';
        $digit_regex = '/[0-9]/';

        if (
            strlen($this->user_password) >= $min_length &&
            (!$requires_uppercase || preg_match($uppercase_regex, $this->user_password)) &&
            (!$requires_lowercase || preg_match($lowercase_regex, $this->user_password)) &&
            (!$requires_digit || preg_match($digit_regex, $this->user_password))

        ){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }

    private function phoneValid(){
        $pattern = '/^\d{10}$/';
        if(preg_match($pattern, $this->user_contactNo)){
            $result=true;
        }else{
            $result=false;
        }
        return $result;
    }

    private function nicValid(){
        $user_nic = preg_replace('/[^0-9v]/', '', $this->user_nic);
        if(preg_match('/^\d{9}v$/', $this->user_nic) || preg_match('/^\d{12}$/', $this->user_nic)){
            $result=true;
        }else{
            $result=false;
        }
        return $result;
    }

    private function userEmailTakenCheck(){
        if(!$this->checkUser($this->user_email)){
            $result = false;
        }else{
            $result = true;
        }

        return $result;
    }
}