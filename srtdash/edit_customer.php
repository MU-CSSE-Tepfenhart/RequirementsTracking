<html>
<body>
      <?php
		
         if(isset($_POST['update'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            $customer_id = $_POST['customer_id'];
            $customer_name = $_POST['customer_name'];
			$customer_title = $_POST['customer_title'];
            
            $sql = "UPDATE customer ". "SET customer_title = '$customer_title', customer_name = '$customer_name' ".
				"WHERE customer_id = '$customer_id'" ;
               
            mysqli_select_db($conn, 'project');
            $retval = mysqli_query($conn, $sql);
            
            if(! $retval ) {
               die('Could not edit data: ' . mysqli_error($conn));
            }
            
            echo "Edited data successfully\n";
            
            mysqli_close($conn);
         }else {
            ?>
            
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
					 
					 <tr>
                        <td width = "100">Customer ID</td>
                        <td><input name = "customer_id" type = "text" 
                           id = "customer_id"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Customer Name</td>
                        <td><input name = "customer_name" type = "text" 
                           id = "customer_name"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Customer Title</td>
                        <td><input name = "customer_title" type = "text" 
                           id = "customer_title"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit" id = "update" 
                              value = "Edit Customer">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            
            <?php
         }
      ?>

</html>