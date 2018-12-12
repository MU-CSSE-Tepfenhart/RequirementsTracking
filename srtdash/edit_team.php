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
            
            $team_id = $_POST['team_id'];
            $team_name = $_POST['team_name'];
			$m_id = $_POST['m_id'];
            
            $sql = "UPDATE team ". "SET m_id = '$m_id', team_name = '$team_name' ".
				"WHERE team_id = '$team_id'" ;
               
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
                        <td width = "100">Team ID</td>
                        <td><input name = "team_id" type = "text" 
                           id = "team_id"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Team Name</td>
                        <td><input name = "team_name" type = "text" 
                           id = "team_name"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">M - ID</td>
                        <td><input name = "m_id" type = "text" 
                           id = "m_id"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit" id = "update" 
                              value = "Edit team">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            
            <?php
         }
      ?>

</html>