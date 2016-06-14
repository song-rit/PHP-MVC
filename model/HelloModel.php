<?php

class HelloModel implements JsonSerializable {

	private $hello;

	public function setHello($hello){
		$this -> hello = $hello;
	}

	public function getHello(){
		return $this -> hello;
	}

	  public function jsonSerialize()
    {		
		$obj = (object) array('message' => $this -> hello);
        return  $obj;
    }
}
?>