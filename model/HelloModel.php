<?php

class HelloModel{

	private $hello;

	public function setHello($hello){
		$this -> hello = $hello;
	}

	public function getHello(){
		return $this -> hello;
	}
}
?>