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
               $team_id = addslashes ($_POST['team_id']);
               $team_name = addslashes ($_POST['team_name']);
			   $m_id = addslashes ($_POST['m_id']);
            }else {
               $team_id = $_POST['team_id'];
               $team_name = $_POST['team_name'];
			   $m_id = $_POST['m_id'];
            }
            
            $sql = "INSERT INTO team ". "(team_id,team_name,m_id) ". "VALUES('$team_id','$team_name',$m_id)";
               
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
                           <input name = "add" type = "submit" id = "add" 
                              value = "Add team">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            
            <?php
         }
      ?>

</html>