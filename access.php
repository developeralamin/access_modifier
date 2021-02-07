<?php 
class Student{
//capsulation method
 private $result = 12;
 
 public function set_name(){
 	return $this->result;
 }
 }
   
$get= new Student();

echo $get->set_name();



