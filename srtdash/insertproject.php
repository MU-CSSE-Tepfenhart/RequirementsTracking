<html>

<body>
 

<?php

include("../includes/reqd_connection.php");

$sql="INSERT INTO project (project_id, project_name, project_sdate, project_edate)

VALUES

('$_POST[id]','$_POST[name]''$_POST[sdate]' '$_POST[edate]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";

 

mysql_close($con)

?>

</body>

</html>