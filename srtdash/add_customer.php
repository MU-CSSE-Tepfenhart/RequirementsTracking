<html>
<body>
      <?php
		
         if(isset($_POST['add'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            if(! get_magic_quotes_gpc() ) {
               $customer_id = addslashes ($_POST['customer_id']);
               $customer_name = addslashes ($_POST['customer_name']);
			   $customer_title = addslashes ($_POST['customer_title']);
            }else {
               $customer_id = $_POST['customer_id'];
               $customer_name = $_POST['customer_name'];
			   $customer_title = $_POST['customer_title'];
            }
            
            $sql = "INSERT INTO customer ". "(customer_id,customer_name,customer_title) ". "VALUES('$customer_id','$customer_name',$customer_title)";
               
            mysqli_select_db($conn, 'project');
            $retval = mysqli_query($conn, $sql);
            
            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
            
            echo "Entered data successfully\n";
            
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
                           <input name = "add" type = "submit" id = "add" 
                              value = "Add customer">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            
            <?php
         }
      ?>

</html>