<?php
	
	function getAllProducts(){		
		require("config.php");
		include_once 'productController.php';

		$query_params = array();
		$controller = new productController($db);
		$result = $controller->getAll($query_params);
		return $result;
	}	

?>