<?php

include 'model/HelloModel.php';

class GreetingModel implements JsonSerializable {

	private $greeting;

	public function setGreeting($greeting) {
		$this -> greeting = $greeting;
	}

	public function getGreeting() { 
		return $this -> greeting;
	}

	public function getJSONEncode() {
		// return json_encode(value);
	}

    public function jsonSerialize()
    {
        return [
            'customer' => [
                'greeting' => $this -> greeting
            ]
        ];
    }
}
?>