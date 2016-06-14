<?php
	
	function getCurrentUri()
		{
			$basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
			$uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
			if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
						
			if($uri[strlen($uri) - 1] == '/'){
				$uri = substr($uri, 0, strlen($uri) - 1);
			}

			return $uri;
		}

		$mappingRequest = getCurrentUri();

		switch ($mappingRequest) {
			case 'hello':
				include 'controller/HelloController.php';
					$controller = new HelloController();
					$controller -> testJson();				
				break;
			
			default:
				# code...
				break;
		}

?>