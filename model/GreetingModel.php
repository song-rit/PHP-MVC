<?php

include 'model/HelloModel.php';

class GreetingModel implements JsonSerializable {

	private $greeting;

	private $ListHelloModel = array();

	public function setGreeting($greeting) {
		$this -> greeting = $greeting;
	}

	public function getGreeting() { 
		return $this -> greeting;
	}

	public function setHello($HelloModel) {
		// $this -> hello. 
		array_push($this -> ListHelloModel, $HelloModel);
	}

	public function getHello() {

	}

    public function jsonSerialize()
    {
        return [
                'greeting' => $this -> greeting,
                'hello' => $this -> ListHelloModel     
        ];
    }
}
?>