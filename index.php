<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>PHP CURD Application</title>
  </head>
  <body>
	  <?php  
		require_once 'process.php';  
		include 'getAll.php';
		$result = getAllProducts();  
	  ?>

	  
	  <?php if(isset($_SESSION['message'])):?>
		<div class="alert alert-<?=$_SESSION['msg_type']?>">	
			<?php 
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			?>
		</div>
	  <?php endif; ?>
	  
	  
		<div class="container">	
			<div class="row justify-content-center">
				<table class="table">
					<thead>
						<tr>
							<th>Product Name</th>
							<th>Description</th>
							<th>Price</th>
							<th>Category ID</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>
			<?php foreach($result as $row ){ ?>
					<tr>
						<td><?php echo $row['name']       ?></td>
						<td><?php echo $row['description']?></td>
						<td><?php echo $row['price']      ?></td>
						<td><?php echo $row['category_id']?></td>
						<td>
							<a href="index.php?edit=<?php echo $row['product_id']; ?>"
							class="btn btn-info">Edit</a>
							<a href="del.php?product_id=<?php echo $row['product_id']; ?>"
							class="btn btn-danger">Delete</a>
						
						</td>
					</tr>
				<?php } ?>
				
				<?php if( count($result) == 0 ):  ?>
				<td></td><td style="color:red" >There Are No Products To View ):</td><td></td><td></td><td></td>
				<?php endif; ?>

				</table>
			</div>
			

			<div class="row justify-content-center">
				<form action="process.php" method="POST">
					
					<input type="hidden" name="id" value="<?php echo $_id; ?>">

					<div class="form-group">
						<label>Product Name</label>
						<input type="text" name="name" class="form-control" 
						value="<?php echo $_name; ?>" placeholder="Enter the product name">
					</div>

					<div class="form-group">
						<label>Description</label>
						<input type="text" name="description" class="form-control"
						value="<?php echo $_description; ?>" placeholder="Enter the description">
					</div>
					
					<div class="form-group">
						<label>Price</label>
						<input type="text" name="price" class="form-control"
						value="<?php echo $_price?> "placeholder="Enter the price">
					</div>

					<div class="form-group">
						<label>Category ID</label>
						<input type="text" name="category_id" class="form-control"
						value="<?php echo $_category_id; ?>"placeholder="Enter the category ID">
					</div>

					<div class="form-group">		
						<?php if( $update == true ): ?>
							<button type="submit" name="save" class="btn btn-info">Save</button>
						<?php else: ?>
							<button type="submit" name="add" class="btn btn-primary">Submit</button>
						<?php endif;?>
					</div>
				</form>
			</div>
		</div>
  </body>
</html>