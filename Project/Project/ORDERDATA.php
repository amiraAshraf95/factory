
<?php
class Databases{
	public $conn;
	 public $email;
	 
	 
    public function __construct()
	{		
		$this->conn = mysqli_connect("localhost", "root" ,"", "factoryy");
	if(mysqli_connect_errno())
	{
		echo 'Database connection Error ' .mysqli_connect_error();
	}
	else 
	{
		echo 'database is connected';
	}
	}
	public function ClientTable($table , $ID , $ClientName , $Address,$Mobile)
      {
	
   
	      $sql = "SELECT  ID,ClientName , Address,Mobile FROM ".$table."  ";
          $result = mysqli_query($this->conn,$sql);
   
          if ($result->num_rows > 0) 
	       {
              echo "<table><tr><th>ID</th><th>ClientName</th><th> Address</th><th>Mobile</th></tr>";
               
              while($row = $result->fetch_assoc()) 
	       {
		      echo "<tr><td> ".$row["ID"]. "</td><td>" . $row["ClientName"]. "</td><td>".$row["Address"].  "</td><td>".$row["Mobile"].  "</td></tr>";
           }
              echo "</table>";
	   
            }   
	        else 
         	{
             echo "0 results";
            }

            }
		public function OrderTable($table , $ID , $ClientID , $Price,$DeliverDate,$PaymentMethodID)
           {
	
   
	      $sql = "SELECT  ID,ClientID ,Price,DeliverDate,PaymentMethodID FROM ".$table."  ";
          $result = mysqli_query($this->conn,$sql);
   
          if ($result->num_rows > 0) 
	       {
              echo "<table><tr><th>ID</th><th>ClientID</th><th> Price</th><th>DeliverDate</th><th>PaymentMethodID</th></tr>";
               
              while($row = $result->fetch_assoc()) 
	       {
		      echo "<tr><td> ".$row["ID"]. "</td><td>" . $row["ClientID"]. "</td><td>".$row["Price"].  "</td><td>".$row["DeliverDate"].  "</td><td>".$row["PaymentMethodID"].  "</td></tr>";
           }
              echo "</table>";
	   
            }   
	        else 
         	{
             echo "0 results";
            }

            }
				public function ProductTable($table , $ID , $TypeName , $TypeSize)
           {
	
   
	      $sql = "SELECT  ID,TypeName ,TypeSize FROM ".$table."  ";
          $result = mysqli_query($this->conn,$sql);
   
          if ($result->num_rows > 0) 
	       {
              echo "<table><tr><th>ID</th><th>TypeName</th><th> TypeSize</th></tr>";
               
              while($row = $result->fetch_assoc()) 
	       {
		      echo "<tr><td> ".$row["ID"]. "</td><td>" . $row["TypeName"]. "</td><td>".$row["TypeSize"].  "</td></tr>";
           }
              echo "</table>";
	   
            }   
	        else 
         	{
             echo "0 results";
            }

            }


	public function order($table_name,$ClientID,$Price,$DeliverDate,$PaymentMethodID)
	{  
	$string = "INSERT INTO " .$table_name. "(ClientID,Price,DeliverDate,PaymentMethodID) VALUES ('" .$ClientID. "','" .$Price. "','" .$DeliverDate."','".$PaymentMethodID."')";
		
	if(mysqli_query($this->conn,$string))
	{
		echo "INSERTEDDD";
	}
	else
	{
	   echo "error!!!!!!!!!!!";
	}
		
		
	}	
	public function orderdetails ($table_name,$productID,$Unit,$quantity,$orderID)
	{  
	$string = "INSERT INTO " .$table_name. "(productID,Unit,quantity,orderID) VALUES ('" .$productID. "','" .$Unit. "','" .$quantity."','" .$orderID."')";
		
	if(mysqli_query($this->conn,$string))	
	{
		echo "INSERTEDDD";
	}
	else
	{
	   echo "error!!!!!!!!!!!";
	}
		
		
	}	
		public function client($table_name,$ClientName,$Address,$Mobile)
	{  
	$string = "INSERT INTO " .$table_name. "(ClientName,Address,Mobile) VALUES ('" .$ClientName. "','" .$Address. "','" .$Mobile."')";
		
	if(mysqli_query($this->conn,$string))	
	{
		echo "INSERTEDDD";
	}
	else
	{
	   echo "error!!!!!!!!!!!";
	}
		
		
	}
	public function product($table_name,$TypeName,$TypeSize)
	{  
	$string = "INSERT INTO " .$table_name. "(TypeName,TypeSize) VALUES ('" .$TypeName. "','" .$TypeSize."')";
		
	if(mysqli_query($this->conn,$string))	
	{
		echo "INSERTEDDD";
	}
	else
	{
	   echo "error!!!!!!!!!!!";
	}
		
		
	}
		public function deleteeorder($ID, $table) 
    { 
        $query = "DELETE FROM ".$table." WHERE ID = '$ID'";
	  
		$result = $this->conn->query($query);
    
        if ($result == false) {
            echo 'Error: cannot delete id ' . $ID . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }
	
	public function update($table,$Order)
	    {
	    //$Email=$_COOKIE["Email"];
		$string = "UPDATE ".$table." SET Order ='$Order' ";
		$result = $this->conn->query($string);

		if($result != false)
		{
			echo "Updated Done";
			}
	    else
		{
			echo "error";
	        }
	    }
}
?>