<?php

if(isset($_GET['functionName'])){

	$functionName = $_GET['functionName'];

	if($functionName == 'update') {
		$getFunc = new Rating();
		$tablename="product";
		 $getFunc->update($tablename,$_GET['ID'], $_GET['productrating']);
	} 
}

class Rating {
    // Database credentials
    private $host     = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'factoryy';
    public  $db;
    
    public function __construct(){
        if(!isset($this->db)){
            // Connect to the database    
            try {
                $this->db = new mysqli($this->host, $this->username, $this->password, $this->database);
            }catch (Exception $e){
                $error = $e->getMessage();
                echo $error;
            }
        }
    }
    public function select(){
		$table="product";
        $select = "SELECT ID,TypeName,productrating FROM ".$table." ";
        $result = mysqli_query($this->db ,$select);
        return mysqli_fetch_all($result);
    }
    public function update($tabl,$ID, $productrating) {
		$tabl="product";
        $update = "UPDATE ".$tabl." SET productrating = '$productrating' WHERE ID = '$ID' ";
        $result = mysqli_query($this->db ,$update);
        if($result) { 
            return 'Data Updated Successfully';
        }
    } 
	 

}

?>