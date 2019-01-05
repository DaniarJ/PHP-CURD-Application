<?php

	require("config.php");
    include_once 'productController.php';
    
    $query_params = array(
        ':product_id'  => $_GET['product_id']	
    );
	
    $controller = new productController($db);
    $result = $controller->get($query_params);
    die(json_encode($result));
?>