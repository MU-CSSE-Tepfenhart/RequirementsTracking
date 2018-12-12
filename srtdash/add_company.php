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
               $company_id = addslashes ($_POST['company_id']);
               $company_name = addslashes ($_POST['company_name']);
			   $p_id = addslashes ($_POST['p_id']);
            }else {
               $company_id = $_POST['company_id'];
               $company_name = $_POST['company_name'];
			   $p_id = $_POST['p_id'];
            }
            
            $sql = "INSERT INTO company ". "(company_id,company_name,p_id) ". "VALUES('$company_id','$company_name',$p_id)";
               
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
                        <td width = "100">Company ID</td>
                        <td><input name = "company_id" type = "text" 
                           id = "company_id"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Company Name</td>
                        <td><input name = "company_name" type = "text" 
                           id = "company_name"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">P - ID</td>
                        <td><input name = "p_id" type = "text" 
                           id = "p_id"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "add" type = "submit" id = "add" 
                              value = "Add Company">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            
            <?php
         }
      ?>

</html>