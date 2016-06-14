<?php

include 'model/GreetingModel.php';


class HelloController{

	private $greeting;
	private $hello;

	public function __construct() {
	
	}

	public function testJson() {
		$this -> greeting = new GreetingModel();
		$this -> greeting -> setGreeting("Hello");		
		$arrayName = array($this -> greeting, $this -> greeting, $this -> greeting);

		$this -> hello = new HelloModel();
		$this -> hello -> setHello("Hello World");
		$this -> greeting -> setHello($this -> hello);
		$this -> greeting -> setHello($this -> hello);
		$this -> greeting -> setHello($this -> hello);
		$this -> greeting -> setHello($this -> hello);
		$this -> greeting -> setHello($this -> hello);
				

		echo json_encode($this -> greeting);
	}
}



?>