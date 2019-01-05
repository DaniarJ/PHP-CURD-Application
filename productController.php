<?php
class productController{
	private $db;
	public function __construct($db){
		$this->db = $db;
	}
	
	public function get($query_params){
		$query = " Select * from products where product_id = :product_id";

         try{
                $stmt   = $this->db->prepare($query);
                $result = $stmt->execute($query_params);

		}catch (PDOException $ex) {                   
                $response["success"] = "DB_ERR";
                $response["message"] = "Database Error. Please Try Again!";
                return $response;       
			}

		$rows = $stmt->fetchAll();
		return $rows;
	}

	public function getAll($query_params){
		$query = " Select * from products";

         try{
                $stmt   = $this->db->prepare($query);
                $result = $stmt->execute($query_params);

		}catch (PDOException $ex) {                   
                $response["success"] = "DB_ERR";
                $response["message"] = $ex.message;
                return $response;       
		}

		$rows = $stmt->fetchAll();
		return $rows;		
	}
	
	public function add($query_params){

		 $query = "INSERT INTO products ( name, description, price, category_id) 
                                    VALUES
                                        (:name,:description,:price,:category_id)";
		try{
	    	$stmt   = $this->db->prepare($query);
	        $result = $stmt->execute($query_params);		

		}catch (PDOException $e){	    	
	       return false;	
	    }
   		return true;
	}

	public function del($query_params){

		 $query = "DELETE from products WHERE product_id = :product_id";
		try 
  		  {
	    	$stmt   = $this->db->prepare($query);
	        $result = $stmt->execute($query_params);
   		}catch (PDOException $e){	    	
	       return false;	
	    }
   		return true;
	}

    public function upd($query_params){

        $query        = "UPDATE products 
                        SET 
                        name = :name, description = :description, 
						price = :price , category_id = :category_id
                        WHERE 
						product_id = :product_id";

        try 
        {
            $stmt   = $this->db->prepare($query);
            $result = $stmt->execute($query_params);    
        } 
        catch (PDOException $e) 
        {
            return false;   
        }
 
        return true;                   
    }

}
?>