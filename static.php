<?php 

class Person{
   //static method
   public static $name='allamin';

	public static function display(){
		echo "Welcome to thakurgoan";
	}
	public function getname(){
		return self::$name;
	}
}

echo Person::$name;
echo "</br>";
$person = new Person();
$person->display();
echo "</br>";
echo $person->getname();

?>