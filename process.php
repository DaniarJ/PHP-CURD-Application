<?php 
	require("config.php");
    include_once 'productController.php';
	$update=false;
	$_id=0;
	$_name='';
	$_description='';
	$_price=0;
	$_category_id='';	


	if(isset($_POST['add'])){
	
		$query_params = array(
			':name' 		=> $_POST['name'],
			':description'  => $_POST['description'],	
			':price' 		=> $_POST['price'],
			':category_id'  => $_POST['category_id']	
		);

		$controller = new productController($db);
		$result = $controller->add($query_params);

		if($result){
			$_SESSION["msg_type"] = "success";
			$_SESSION["message"] = "Successfully Added!";      
		}
		
		header("location: index.php");		

	}
	
	if(isset($_GET['edit'])){
		
		$_id = $_GET['edit'];
		$query_params = array(':product_id'  => $_GET['edit']);
		$controller = new productController($db);
		$result = $controller->get($query_params);

		$_name        = $result[0]['name'];
		$_description = $result[0]['description'];
		$_price       = $result[0]['price'];
		$_category_id = $result[0]['category_id'];
		$update = true;

		}

	if(isset($_POST['save'])){

		$query_params = array(
			':product_id' 		=> $_POST['id'],
			':name' 		=> $_POST['name'],
			':description'  => $_POST['description'],	
			':price' 		=> $_POST['price'],
			':category_id'  => $_POST['category_id']	
		);
		
		$controller = new productController($db);
		$result = $controller->upd($query_params);

		if($result){
			$_SESSION["msg_type"] = "success";
			$_SESSION["message"] = "Successfully Edited!";      
		}
		
		header("location: index.php");				
	}
?>