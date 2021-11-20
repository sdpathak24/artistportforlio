<?php

class Mail{
    private $to;
    private $headers="";
    function __construct(){
        $this -> setToEmailId("sarvagnpathak03@gmail.com");
        $this -> setHeaders('MIME-Version: 1.0');
        $this -> setHeaders('Content-type: text/html; charset=iso-8859-1');
    }
    function setToEmailId($to){
        $this -> to = $to;
    }
    function setHeaders($headers){
        $this -> headers .= $headers ."\r\n";
    }
    function sendMail($subject,$message){
            return mail($this -> to,$subject,$message,$this -> headers);
    }    
    
}
?>