
<?php
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
	public function drop()
	{
	// Assume $db is a PDO object
	   $query = "SELECT FirstName FROM ".$table." WHERE Email = '$Email'";
		$result = mysqli_query($this->conn, $query);
	
		if($result == false)
		{ 
		    return false;
		}
	
		while($row = $result->fetch_assoc())
		{
	     {$rows = $row;}
		}
		return $rows;
	       
	
      //$query = $db->query("YOUR QUERY HERE"); // Run your query

     echo '<select name="DROP DOWN NAME">'; // Open your drop down box

// Loop through the query results, outputing the options one by one
     while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
     echo '<option value="'.$row['something'].'">'.$row['something'].'</option>';
    }

      echo '</select>';// Close your drop down box
	}
	

	public function insert ($table_name,$FirstName,$LastName,$Mobile,$Age,$WorkHours,$result,$Address,$Email,$Password)
	{  $table='usertype';

	   $string="SELECT ID FROM ".$table." WHERE Name = '$result'";
	   $result =  mysqli_query($this->conn,$string);
	   while ($row = $result->fetch_assoc()) {
    $result1= $row['ID'];
}
	  
	$string = "INSERT INTO " .$table_name. "(FirstName,LastName,Mobile,Age,WorkHours,TypeID,Address,Email,Password) VALUES ('" .$FirstName. "','" .$LastName."','".$Mobile."','".$Age."','".$WorkHours."','".$result1."','".$Address."','".$Email."','".$Password."')";
		
		
	if(mysqli_query($this->conn,$string))
	{
		echo "INSERTEDDD";
	}
	else
	{//echo $result;
	   echo "error!!!!!!!!!!!";
	   
	}
		
		
	}
	
	
	
	   function executesql($sql){
            if($this->conn->query($sql) == TRUE){
                return $result = mysqli_query($this->conn, $sql);
            }else{
                echo "SQL Failed : ".$this->conn->error;
            }
        }
	
	
	public function FIRST($FirstName,$table)
	{ 
		
	    $Email=$_COOKIE["Email"];
	    $_GET['FirstName']=$FirstName;
		$query = "SELECT FirstName FROM ".$table." WHERE Email = '$Email'";
		$result = mysqli_query($this->conn, $query);
	
		if($result == false)
		{ 
		    return false;
		}
	
		while($row = $result->fetch_assoc())
		{
	     {$rows = $row;}
		}
		return $rows;
	       
	}
	public function LasttName($LastName,$table)
	{
		$Email= $_COOKIE["Email"];
	    $_GET['LastName']=$LastName;
		$query = "SELECT LastName FROM ".$table." WHERE Email = '$Email'";
		
		$result = mysqli_query($this->conn, $query);

		if($result == false)
		{
			
		    return false;
		}
	
		while($row = $result->fetch_assoc())
		{
		   
			{$rows = $row;}
		}
		return $rows;
	
	}
	public function GetMobilee($Mobile,$table)
	{
		
		$Email= $_COOKIE["Email"];
	    $_GET['Mobile']=$Mobile;
		$query = "SELECT Mobile FROM ".$table." WHERE Email='$Email'";
		$result = mysqli_query($this->conn, $query);

		if($result == false)
		{
		    return false;
		}
		
		while($rows = $result->fetch_assoc())
		{
			
			{$row = $rows;}
		}
		return $row;
	
	}
	public function GetAddr($Address,$table)
	{
		$Email= $_COOKIE["Email"];
	    $_GET['Address']=$Address;
		$query = "SELECT Address FROM ".$table." WHERE Email='$Email'";
		$result = mysqli_query($this->conn, $query);

		if($result == false)
		{
		    return false;
		}

		while($row = mysqli_fetch_assoc($result))
		{
			
		   
			{$rows = $row;}
		}
		return $rows;
	
	}
	public function AGE($Age,$table)
	{
		$Email= $_COOKIE["Email"];
	    $_GET['Age']=$Age;
		$query = "SELECT Age FROM ".$table." WHERE Email='$Email'";
		$result = mysqli_query($this->conn, $query);

		if($result == false)
		{
		    return false;
		}

		while($row = mysqli_fetch_assoc($result))
		{
			
		   
			{$rows = $row;}
		}
		return $rows;
	
	}
     public function Hours($WorkHours,$table)
	{
		$Email= $_COOKIE["Email"];
	    $_GET['WorkHours']=$WorkHours;
		$query = "SELECT WorkHours FROM ".$table." WHERE Email='$Email'";
		$result = mysqli_query($this->conn, $query);

		if($result == false)
		{
		    return false;
		}

		while($row = mysqli_fetch_assoc($result))
		{
			
		   
			{$rows = $row;}
		}
		return $rows;
	
	}
     public function Type($TypeID,$table)
	{
		$Email= $_COOKIE["Email"];
	    $_GET['TypeID']=$TypeID;
		$query = "SELECT TypeID FROM ".$table." WHERE Email='$Email'";
		$result = mysqli_query($this->conn, $query);

        if($result == false)
		{
			
		    return false;
		}
	
		while($row = $result->fetch_assoc())
		{
		   
			{$rows = implode($row);}
		}

	
	
	 
		$tablename='usertype';
		 $string="SELECT Name FROM ".$tablename." WHERE ID = '$rows'";
	   $result2 =  mysqli_query($this->conn,$string);
	    while ($row = $result2->fetch_assoc()) {
           $result3= $row;
	 		return $result3;
		}

		
	}	
      public function IDuser($ID,$table)
	{
	    $Email=$_COOKIE["Email"];
		$_GET['ID']=$ID;
		$query = "SELECT ID FROM ".$table." WHERE Email='$Email'";
		$result = mysqli_query($this->conn, $query);

		if($result == false)
		{
		    return false;
		}
		
		while($row = $result->fetch_assoc())
		{
		
			{$rows = $row;}
		}
		return $rows;
	       
	}
	public function sig($table_name,$Email,$Password)
    {
		$Email= $_POST['Email'];
        $Password= $_POST['Password'];
		//select($email, $table_name);
		if(!empty($Email) && !empty($Password))
        {
            $sql = "SELECT * FROM $table_name WHERE Email='$Email' AND Password='$Password' ";
            $result = mysqli_query($this->conn, $sql);
            $row = mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result)>0)
            {
			    if($Password == $row['Password'])
	            {
		            echo "Logged in";
					
						$cookie_name = "Email";
						$cookie_Email = $Email;
						setcookie($cookie_name, $cookie_Email, time() + (86400 * 30), "/"); // 86400 = 1 day
						if(isset($_COOKIE[$cookie_name])) {
							header("Location: Profile.php?email='$_COOKIE[$cookie_name]'");	
						}
	            }
						
	            else
	            {   echo "Error";}
            }  
			 
        }
    }
		public function update($table,$ID,$FirstName,$LastName,$Mobile,$Age,$WorkHours,$result,$Address)
	    {
			$table1='usertype';

	        $string="SELECT ID FROM ".$table1." WHERE Name = '$result'";
	        $result1 =  mysqli_query($this->conn,$string);
	         while ($row = $result1->fetch_assoc()) {
             $result2= $row['ID'];
               }
	    $Email=$_COOKIE["Email"];
		$string = "UPDATE ".$table." SET ID='$ID', FirstName ='$FirstName',LastName='$LastName',Mobile='$Mobile',Age='$Age',WorkHours='$WorkHours',TypeID='$result2',Address='$Address'
        WHERE Email='$Email' ";
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
		public function deletee($ID, $table) 
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
		public function WorkerTable($table , $ID , $FirstName , $LastName,$Mobile,$Age,$WorkHours ,$TypeID,$Address)
      {
	
   

	      $sql = "SELECT  ID,FirstName , LastName,Mobile,Age,WorkHours,TypeID,Address  FROM ".$table."  ";
          $result = mysqli_query($this->conn,$sql);
   
          if ($result->num_rows > 0) 
	       {
              echo "<table><tr><th>ID</th><th>FirstName</th><th> LastName</th><th> Mobile</th><th> Age</th><th> WorkHours</th><th> TypeID</th><th> Address</th></tr>";
               
              while($row = $result->fetch_assoc()) 
	       {
		      echo "<tr><td> ".$row["ID"]. "</td><td>" . $row["FirstName"]. "</td><td>".$row["LastName"].  "</td><td>".$row["Mobile"].  "</td><td>".$row["Age"].  "</td><td>".$row["WorkHours"].  "</td><td>".$row["TypeID"].  "</td><td>".$row["Address"].  "</td></tr>";
           }
              echo "</table>";
	   
            }   
	        else 
         	{
             echo "0 results";
            }

            }
}
?>	
	