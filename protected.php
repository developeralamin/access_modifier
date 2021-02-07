<?php 
class Student{
//incapsulation method
 protected $result = 12;
   
  public function update(){
  	return $this->result . 'kg';
  }

 }
   
class B extends Student{
	public function second(){
		$this->result = 30;
	}
}

$get= new B();
// echo $get->result;
echo $get->update();
echo '</br>';
$get->second();
echo $get->update();

echo '</br>';



