	
<?php
session_start();
require "observer.php";
class Databasess{
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
	public function destroy()
	{
		Session_unset(); 
Session_destroy();
		
	}
	
public function edit($table,$Mobile,$Address)
	    {
			
	    $Email=$_COOKIE["Email"];
		$string = "UPDATE ".$table." SET Mobile='$Mobile',Address='$Address' WHERE Email='$Email' ";
		//$result = $this->conn->query($string);
		$result =  mysqli_query($this->conn,$string);

		if($result != false)
		{
			echo "Updated Done";
			}
	    else
		{
			echo "error";
	        }
	    }
	public function clientinfo(){
//	$ID=$_SESSION["id"];
$Email= $_COOKIE["Email"];
	$table="factoryy.user";

	$sql = "SELECT  FirstName , LastName , Mobile  , Address FROM `user` WHERE Email='$Email'";
          $result = mysqli_query($this->conn,$sql);
  
              while($row = $result->fetch_assoc()) 
	       {
		      echo "<b> client first name is: ".$row['FirstName']. "</b><br><b>  client last name is :" .$row['LastName']." </b><br><b> Mobile:".$row['Mobile']."</b><br><b> Address:".$row['Address']."</b>" ; 
			  
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
		
	
	
	
				
			
			
public function getquantity()
{$ID=$_GET['id']; 
$table="product";


$sql = "SELECT  quantity FROM ".$table." WHERE ID='$ID'";

          $result = mysqli_query($this->conn,$sql);

    $option='';
	
 while($row = $result->fetch_assoc()) 
	       {for($i=1;$i<=$row['quantity'];$i++)
{
 $option.='<option name="quan" value="'.$i.'">'.$i.'</option>' ;
		 
		   }
		  return $option;
}

}
public function select()
	{ 
		

		$ID=$_GET['id'];
	    $_SESSION["productid"] = $ID;
		$table="product";
		
	$query = "SELECT TypeName, TypeSize, Description, Image, Price FROM ".$table." WHERE ID='$ID'";
		$result = mysqli_query($this->conn, $query);
	
		if($result == false)
		{ 
		    return false;
		}
	
		while($row = $result->fetch_assoc())
		{
		echo"<br/> TypeName:".$row['TypeName'];
		echo"<br/> TypeSize:".$row['TypeSize'];
				echo"<br/> Description:".$row['Description'];
						echo"<br/> Image:<img src='".$row["Image"]."' width='150' height='100'/>";
								echo"<br/> Price:".$row['Price'];
								
				
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
		
public function orderr($table_name,$PaymentMethod)
     {  $tabl="user";
	 
	
	$Email= $_COOKIE["Email"];
			  
	$sql = "SELECT ID FROM ".$tabl." WHERE Email='$Email'";

	   $result=  mysqli_query($this->conn,$sql);
	
	  while ($row = $result->fetch_assoc()) {
   $result1= $row['ID'];
     }
	
	 $table="product";
		$table2="orderdetails";
		
	$productid=$_SESSION["productid"];
	$orderid=$_SESSION["orderId"];

	$sqll="SELECT (product.price* orderdetails.quantity) FROM `product` INNER JOIN `orderdetails`ON product.ID =orderdetails.productID WHERE orderdetails.orderID='$orderid' AND  orderdetails.productID='$productid' "; 
		        $result2 = mysqli_query($this->conn,$sqll);
		   
	   while ($row = $result2->fetch_assoc()) {
   $r= $row['(product.price* orderdetails.quantity)'];
   
     }


$tab='paymentmethod';

	   $string="SELECT ID FROM ".$tab." WHERE Name = '$PaymentMethod'";
	   $resu =  mysqli_query($this->conn,$string);
	   while ($row = $resu->fetch_assoc()) 
	   {
    $PaymentMethod= $row['ID'];
}

$d=strtotime("+3 Days");
echo $dd=date("Y-m-d", $d);
	$string= "INSERT INTO " .$table_name. " (UserID,Price,DeliverDate,PaymentMethodID) VALUES ('" .$result1."','" .$r."','".$dd."','".$PaymentMethod."')";
		
		if(mysqli_query($this->conn,$string))	
	{    
		
		$last_id = $this->conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
	 $_SESSION["orderId"] = $last_id; ////////////////////////////////////////////////////////////////dooll
	 echo "session is added";
echo  $_SESSION["productid"] ;

			
	}
	else
	{
	   echo "error!!!!!!!!!!!";
	}
		}
		public function orderD($table_name)
		{$table="product";
			$orderid=$_SESSION["orderId"];
			$productid=$_SESSION["productid"];
	
			$sql = "SELECT quantity FROM ".$table." WHERE ID='$productid'";

	   $result =  mysqli_query($this->conn,$sql);
	   while ($row = $result->fetch_assoc()) {
   $result1= $row['quantity'];

	}
	 
			
		$string= "INSERT INTO " .$table_name. "(productID,quantity,orderID) VALUES ('" .$productid."','" .$result1."','".$orderid."')";

			if(mysqli_query($this->conn,$string))	
	{    echo "inserted";
			
	}
	}	
	public function getid()
	{
		$table="factoryy.orderdetails";
		 
        $sql="SELECT  productID,
        COUNT(`productID`) AS `value_occurrence` 
        FROM  ".$table."
        GROUP BY `productID`
        ORDER BY `value_occurrence` DESC
        LIMIT    1";
		$result = mysqli_query($this->conn,$sql);
		

		while($row = mysqli_fetch_assoc($result))
		{
			
		   
			$rows = $row['productID'];
		}
		$table1="factoryy.product";
		$sql = "SELECT  ID,TypeName,TypeSize,Price,Description,Image FROM ".$table1." WHERE ID='$rows'";
          $result = mysqli_query($this->conn,$sql);
   
     
            
              while($row = $result->fetch_assoc()) 
	       {
		      echo "<b> productid: ".$row['ID']. "</b><br><b>Type Name:" . $row['TypeName']. "</b><br><b>Type Size: " . $row['TypeSize']. "</b><br><b>Price: " . $row['Price']. "</b><br><b> Description: ".$row['Description']. "</b><br><b>Image:<img src='".$row["Image"]."' width='150' height='100'/></b><br>";
              
            }
	}
	public function addtax($table_name,$Tax)
	{
		
		$string = "INSERT INTO " .$table_name. "(TAX) VALUES ('" .$Tax. "')";
		
	if(mysqli_query($this->conn,$string))	
	{
		echo "INSERTEDDD";
	}
	else
	{
	   echo "error!!!!!!!!!!!";
	}
		
    }
	public function gettax($TAX)
	{
		$table="taxes";
		$query = "SELECT TAX FROM ".$table." ";
		$result =  $this->conn->query($query);
		
		  while($row = mysqli_fetch_array($result))
	  {
		  $this->TAX=$row["TAX"];
	  }
		  return $this->TAX;
	  
	
	}
	public function selectprice($Price)
	{    
	 	$orderid=$_SESSION["orderId"];
	  $string = "SELECT `Price` FROM `order` WHERE ID ='$orderid' ";
	  $result = $this->conn->query($string);
	  while($row = mysqli_fetch_array($result))
	  {
		  $this->Price=$row["Price"];
	  }
		  return $this->Price;
	  

	}
	public function OrderT()
           {
	$table="factoryy.order";
           
	      $sql = "SELECT  ID,Price,DeliverDate FROM ".$table."  ";
          $result = mysqli_query($this->conn,$sql);
   
          if ($result->num_rows > 0) 
	       {
              echo "<table><tr><th>ID</th><th> Price</th><th>OrderDate</th></tr>";
               
              while($row = $result->fetch_assoc()) 
	       {
		      echo "<tr><td> ".$row["ID"]. "</td><td>".$row["Price"].  "</td><td>".$row["DeliverDate"].  "</td><td> </td></tr>";
              
		   }
              echo "</table>";
	   
            }   
	        else 
         	{
             echo "0 results";
            }

            }
	public function getbestMseller($month,$year){
$table="factoryy.order";
		 
        $sql="SELECT SUM(Price) FROM ".$table." WHERE MONTH(DeliverDate) = '$month' AND YEAR(DeliverDate) = '$year'";
		$result = mysqli_query($this->conn,$sql);
		

		while($row = mysqli_fetch_assoc($result))
		{
			
		   
			$rows = $row['SUM(Price)'];
		}
		echo "<b> total selling orders in ".$month." in year ".$year." is ".$rows."";

	}	
	
public function orderdescript(){
	$orderid=$_SESSION["orderId"];
	$productid=$_SESSION["productid"];
	$table="factoryy.order";
	$sql 
	= "SELECT  Price , DeliverDate FROM ".$table." WHERE ID='$orderid'";
          $result = mysqli_query($this->conn,$sql);
   
     
            
              while($row = $result->fetch_assoc()) 
	       {
		      echo "<b> Totalprice: ".$row['Price']. "</b><br><b>DeliverDate :" . $row['DeliverDate']. "</b><br><b>paymentMethod : Cash</b><br>";//.$row["Price"].  "</td><td>".$row["DeliverDate"].  "</td><td>".$row["PaymentMethodID"].  "</td></tr>";
              
            }
}
public function productdescript(){
	$orderid=$_SESSION["orderId"];
	//$productid=$_SESSION["productid"];
	$table="factoryy.orderdetails";
	//$sql = "SELECT  quantity FROM ".$table." WHERE orderID='$orderid'" ;
	$sql = "SELECT  productID, quantity FROM `orderdetails` WHERE orderID='$orderid'";
          $result = mysqli_query($this->conn,$sql);
   
       //  echo $orderid;
		 //echo $productid;
            
              echo "<b> your orderNO :".$orderid."</b><br> "; 
              while($row = $result->fetch_assoc()) 
	       {
		      echo "<b> productID is ".$row['productID']. "</b><b>     quantity :" . $row['quantity']. "</b>";//.$row["Price"].  "</td><td>".$row["DeliverDate"].  "</td><td>".$row["PaymentMethodID"].  "</td></tr>";
              $product=$row['productID'];
			  $table1="factoryy.product";
	          $sql1 = "SELECT  TypeName, TypeSize, Description FROM ".$table1." WHERE ID='$product'" ;
              $result1 = mysqli_query($this->conn,$sql1);
   
       
                
              while($row = $result1->fetch_assoc()) 
	       {
		      echo "<b>    Typename ".$row['TypeName']. "</b><b>        TypeSize :" . $row['TypeSize']. "</b><b>     description :" . $row['Description']. "</b><br>";//.$row["TypeSize"].  "</td><td>".$row["DeliverDate"].  "</td><td>".$row["PaymentMethodID"].  "</td></tr>";
              
            }
            }
}

public function clientdescript(){
	$orderid=$_SESSION["orderId"];
	//$productid=$_SESSION["productid"];
	//$client=$_SESSION["clientid"];
	$table="factoryy.order";
	$sql = "SELECT  UserID FROM ".$table." WHERE ID='$orderid'" ;
          $result = mysqli_query($this->conn,$sql);
   
     
               
              while($row = $result->fetch_assoc()) 
	       {   
	          $userid=$row['UserID'];
			  
		     // echo "<b>Typename ".$row['TypeName']. "</b><br><b> TypeSize :" . $row['TypeSize']. "</b><br><b>description :" . $row['Description']. "</b><br>";//.$row["TypeSize"].  "</td><td>".$row["DeliverDate"].  "</td><td>".$row["PaymentMethodID"].  "</td></tr>";
              
            }$table1="factoryy.user";
	$sql1 = "SELECT  FirstName,LastName ,Mobile , Age, Address,Email FROM ".$table1." WHERE ID='$userid'" ;
          $result1 = mysqli_query($this->conn,$sql1);
   
     
               
              while($row = $result1->fetch_assoc()) {
				  echo "<b>Firstname ".$row['FirstName']. "</b><br><b> LastName :" . $row['LastName']. "</b><br><b>Mobile :" . $row['Mobile']. "</b><br><b>Age :" . $row['Age']. "</b><br><b>Address :" . $row['Address']. "</b><br><b>email :" . $row['Email']. "</b><br>";//.$row["TypeSize"].  "</td><td>".$row["DeliverDate"].  "</td><td>".$row["PaymentMethodID"].  "</td></tr>";
              
				  
			  }
			
			
}

	public function ProductTable()
           {
	$table="product";
	 
   
	      $sql = "SELECT ID,TypeName, TypeSize, Description, Image, Price FROM ".$table."  ";
          $result = mysqli_query($this->conn,$sql);
 

          if ($result->num_rows > 0) 
	       {
              echo "<table><tr><th>ID</th><th>TypeName</th><th> TypeSize</th><th> Description</th><th> Image</th><th> Price</th></tr>";
               
              while($row = $result->fetch_assoc()) 
	       {
		      echo "<tr><td> ".$row["ID"]. "</td><td><a href=QuantityProduct.php?id=".$row["ID"].">" . $row["TypeName"]. "</a></td><td>".$row["TypeSize"].  "</td><td>".$row["Description"]."</td><td><img src='".$row["Image"]."' width='150' height='100'/> </td><td>".$row["Price"]. "</td></tr>";

           }
              echo "</table>";
	   
            }   
	        else 
         	{
             echo "0 results";
            }

            }
				
				
			Public function totalprice()
			{
			    $orderid=$_SESSION["orderId"];
	            $productid=$_SESSION["productid"];
	            $table="factoryy.order";
	            $sql = "SELECT  Price FROM ".$table." WHERE ID='$orderid'";
                $result = mysqli_query($this->conn,$sql);
   
               
              while($row = $result->fetch_assoc()) 
	       {
		      echo "<b> Totalprice: ".$row['Price']. "</b><br>";
              
            }
			
            }
			 public function Observer(){
	//$id=getUserID();
	$tabl="factoryy.user";
  $Email= $_COOKIE["Email"];
			  
	$sql = "SELECT ID, FirstName, LastName FROM ".$tabl." WHERE Email='$Email'";

	   $result=  mysqli_query($this->conn,$sql);
	
	  while ($row = $result->fetch_assoc()) {
	$id=$row['ID'];	  
   $FN= $row['FirstName'];
   $LN=$row['LastName'];
   
     }
	 $orderid=$_SESSION["orderId"];
	 		 $tabl22="factoryy.order"; 
	$sql1 = "SELECT  DeliverDate FROM ".$tabl22." WHERE ID='$orderid'";

	   $result44=  mysqli_query($this->conn,$sql1);
	
	  while ($row = $result44->fetch_assoc()) {
	$Deliverdate=$row['DeliverDate'];	  
  
   
     }
	 
	 $time=date("h:i:sa");
		 $date=date("Y-m-d");
		 $msg='Your product will be delivered in ';
  $patternGossiper = new clientGroup();
  $patternGossipFan = new PremiumClient($FN ,$LN);
 // $patternGossipFan1 = new NormalClient('youssef');
  //$patternGossipFan2 = new NormalClient('amr');
  $patternGossiper->addClient($patternGossipFan);
  //$patternGossiper->addClient($patternGossipFan1);
  //$patternGossiper->addClient($patternGossipFan2);
  $patternGossiper->sendEmail($time.'<br>' .$date.'<br>'.$msg.$Deliverdate.'<br> your product ID is '.$orderid);
 // $patternGossiper->sendEmail('welcome again');
  //$patternGossiper->removeClient($patternGossipFan);
  //writeln('END TESTING OBSERVER PATTERN');
  //$patternGossiper->sendEmail('hello');
		
		 $tabl11="factoryy.notifyy";
	$string= "INSERT INTO " .$tabl11. "(msg,Date,Time,userID,orderID) VALUES ('" .$msg."','" .$date."','".$time."','".$id."','".$orderid."')";

			if(mysqli_query($this->conn,$string))	
	{    echo "inserted";
		
	} 
		 
	 }

}
?>
