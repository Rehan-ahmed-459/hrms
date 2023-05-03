<?php 
include 'config.php';
class Checkrole{
    public $role;
    public $session;

   function __construct($role,$session){
   
  
    $sql="SELECT role from users where role=:role";
    $query=$dbh->prepare($sql);
    $query->bindparam(':role',$role,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query){

    }
   chk($role,$session)
   }
   function chk($r,$s){
    if($r=='emp' && $s=$this->$_SESSION)
   }
}