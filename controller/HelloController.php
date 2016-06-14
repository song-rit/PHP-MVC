<?php

include 'model/GreetingModel.php';


class HelloController{

	private $greeting;

	public function __construct() {
	
	}

	public function testJson() {
		$this -> greeting = new GreetingModel();
		$this -> greeting -> setGreeting("Hello");		
		$arrayName = array($this -> greeting, $this -> greeting, $this -> greeting);

		// foreach ($arrayName as $array) {
		// 	echo $array -> getGreeting() . "<br/>";
		// }

		echo json_encode($this -> greeting);
	}
}



?>