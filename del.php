<?php
	session_start();
	require("config.php");
    include_once 'productController.php';
   
    $query_params = array(
        ':product_id'  => $_GET['product_id']	
    );

    $controller = new productController($db);
    $result = $controller->del($query_params);

    if($result){
        $_SESSION["msg_type"] = "danger";
        $_SESSION["message"] = "Successfully Deleted!";      
    }

	header("location: index.php");		     
    die(json_encode($_SESSION));
?>