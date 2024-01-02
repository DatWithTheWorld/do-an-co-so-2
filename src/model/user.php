<?php 
class User{
   public $uid;
   public $uname;
   public $uphone;
   public $uaddress;
   public $utimes;
   function __construct( $uid, $uname, $uphone, $uaddress, $utimes ){
           $this->uid = $uid;
           $this->uname = $uname;
           $this->uphone = $uphone;
           $this->uaddress = $uaddress;
           $this->utimes = $utimes;
   }
   function set_uid($uid){
    $this->uid = $uid;
   }
    function set_uname($uname){
    $this->uname = $uname;
   }
   function set_uphone($uphone){
     $this->uphone = $uphone;
   }
   function set_uaddress($uaddress){
    $this->uaddress = $uaddress;
   }
   function set_utimes($utimes){
    $this->utimes = $utimes;
   }
    function get_uname(){
        return $this->uname;
    }
    function get_uphone(){
        return $this->uphone;
    }
    function get_uaddress(){
        return $this->uaddress;
    }
    function get_utimes(){
        return $this->utimes;
    }
}
?>