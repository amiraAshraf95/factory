
<!DOCTYPE html>
<html>
    <head>
	<link rel="stylesheet" href="css.css">
        <title>Simple star rating system using PHP, jQuery and Ajax</title>
        <style type="text/css">
            .star_rated { color: gold; }
            .star {text-shadow: 0 0 1px #F48F0A; cursor: pointer;  }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript">
            function ratestar($ID, $productrating){
                $.ajax({
                    type: 'GET',
                    url: 'rating.php',
                    data: 'functionName=update&ID='+$ID+'&productrating='+$productrating, 
			
                    success: function(data) { 
                        location.reload();
                    }
                });
            }
        </script>
		
    </head>
    <body>
	    
    
<ul>
   <li><a href="SignInController.php" >SignIn</a></li>
   <li> <a href="UserController.php" >ADDUSER</a></li>
   <li> <a href="profile.php" >Profile</a></li>	
   <li><a href="OrderController.php" >Order</a></li>
   <li><a href="ProductsTableController.php" >ProductsTable</a></li>
 
     <li><a href="deleteController.php" >Delete</a></li>
     <li><a href="ProductController.php" >Add Product</a></li>
	 <li><a href="DeleteOrderController.php" >Delete Order</a></li>
   <li><a href="map.php" >Map</a></li>
    <li><a href="mm.php" >Notification</a></li>
	 <li><a href="Bestseller.php" >BestSeller</a></li>
	 	 <li><a href="star.php" >Rating</a></li>
		 	<li><a href="ListOrder.php" >ListOrder</a></li>
   <li><a href="ListProduct.php" >ListProduct</a></li>
	<li><a href="ListCustomers.php" >Customers</a></li>
		<li><a href="SignOut.php" >SignOut</a></li>
  </ul> 
       		<?php
     include "rating.php";
	 //include "rate.php";
            $db = new Rating();
            $data = $db->select();
			
?>
        <div id="star">
		<table >
            <thead>
                <th>Product</th>
				
                <th>Rating</th>
            </thead>
	
            <?php
            foreach($data as $pro) {
                ?>
                <tr>
                    <td><?php echo $pro[1]; ?></td>
                    <td>
                        <div class="star">
                        <?php
                        for($i = 1; $i <= 5; $i++) {
                            if($i <= $pro[2]) {  
                        ?>
                        <span class="star_rated" onclick="ratestar(<?php echo $pro[0]; ?>, <?php echo $i; ?>)">&#x2605;</span>
                        <?php }  else {  ?>
                        <span onclick="ratestar(<?php echo $pro[0]; ?>, <?php echo $i; ?>)">&#x2605;</span>
                        <?php  }
                        }
					
                        ?>
                        </div>
                    </td>
                </tr>
                <?php
           }
            ?>
        </table>     
</div>		
  </body>
</html>