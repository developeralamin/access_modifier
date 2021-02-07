<?php 
class Constant{
   //constant 
	const message='This is a test constant';

	public function byebye(){
		return self::message;
	}
}

$good = new Constant();

echo $good->byebye();



?>