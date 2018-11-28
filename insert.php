<html>

<body>
 

<?php

include("../includes/reqd_connection.php");

$sql="INSERT INTO requirements (requirement_id, requirement_summary, requirement_sdate, requirement_edate, requirement_parent, requirement_assigner, requirement_assignee)

VALUES

('$_POST[id]','$_POST[summary]''$_POST[sdate]' '$_POST[edate]' '$_POST[parent]' '$_POST[assigner]' '$_POST[assignee]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";

 

mysql_close($con)

?>

</body>

</html>

 