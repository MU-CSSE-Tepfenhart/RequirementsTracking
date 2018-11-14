<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
  include("../../reqd_connection.php")
?>
<head>
<link rel="stylesheet" href="includes/admin.css" type="text/css" media="screen" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>

<body>
	<div id = "container">
	<?php include("../includes/reqd_connection.php");?>
	<?php 
		session_start();
		if (isset($_GET['requirement_id_TBD']))
			$requirement_id = $_GET['requirement_id_TBD'];
		else
			echo "Invalid access.";
	?>
		<?php
		if ($_SERVER['REQUEST_METHOD']=='POST'){  //case 2
				
			$requirement_type = $_POST['requirement_type'];
			$requirement_sdate = $_POST['requirement_sdate'];
			$requirement_edate = $_POST['requirement_edate'];
			$requirement_assigner = $_POST['requirement_assigner'];
			$requirement_parent = $_POST['requirement_parent'];
			$requirement_summary = $_POST['requirement_summary'];
			$requirement_assignee = $_POST['requirement_assignee'];
			$requirement_version = $_POST['requirement_version'];
				
			$q = "UPDATE requirements SET 
				requirement_type='$requirement_type',
				requirement_sdate='$requirement_sdate',
				requirement_edate='$requirement_edate',
				requirement_assigner='$requirement_assigner',
				requirement_parent='$requirement_parent',
				requirement_summary='$requirement_summary',
				requirement_assignee='$requirement_assignee',
				requirement_version='$requirement_version'
				WHERE requirement_id = '$requirement_id'"; 
				
			//execute the query 
			$result = $conn->query($q);
			if ($result === TRUE)
				echo "Record updated successfully";
			else 
				echo "Error updating record: ".$conn->error;
				}
			
	?>
	
	<div id="content" >	
		<h1>View Requirments</h1>		

		<center><table>
			<col width="50">
			<col width="50">
			<col width="50">
			<col width="100">
			<col width="80">
			<col width="80">	
			<col width="60">
			<col width="50">
			<col width="50">
		<tr>
			<th>Req ID</th>
			<th>Type</th>
			<th>Start Date</th>
			<th>End Date</th>
			<th>Assigner</th>
			<th>Parent Req ID</th>
			<th>Summary</th>
			<th>Assignee</th>
			<th>Version</th>
		</tr>

		<?php 
			//connect to DB
			

			$q = "SELECT * FROM requirements WHERE requirement_id = '$requirement_id'";
			$r = $conn->query($q); //r variable is an object reference that stores connection of query
			
			while ($row = $r->fetch_assoc()) { //puts one record r in row, making sure its not null 
				echo "<tr>";
					echo "<td>".$row['requirement_id']."</td>";
					echo "<td>".$row['requirement_type']."</td>";
					echo "<td>".$row['requirement_sdate']."</td>";
					echo "<td>".$row['requirement_edate']."</td>";
					echo "<td>".$row['requirement_assigner']."</td>";
					echo "<td>".$row['requirement_parent']."</td>";
					echo "<td>".$row['requirement_summary']."</td>";
					echo "<td>".$row['requirement_assignee']."</td>";
					echo "<td>".$row['requirement_version']."</td>";
				echo "</tr>";
			}
			
		?>					
		</table><center> 
		<form action = "" method = "post">
			<center><table>
			
			<tr>
				<td>Requirement Type:</td>
				<td><input type="text" name="requirement_type" id = "requirement_type"></td>
			</tr>
			<tr>
				<td>Requirement Start Date:</td>
				<td><input type="text" name="requirement_sdate" id = "requirement_type" ></td>
			</tr>
			<tr>
				<td>Requirement End Date:</td>
				<td><input type="text" name="requirement_edate" id = "requirement_type"></td>
			</tr>
			<tr>
				<td>Requirement Assigner:</td>
				<td><input type="text" name="requirement_assigner" id = "requirement_type"></td>
			</tr>
			<tr>
				<td>Parent Requirement:</td>
				<td><input type="text" name="requirement_parent" id = "requirement_type"></td>
			</tr>
			<tr>
				<td>Requirement Summary:</td>
				<td><input type="text" name="requirement_summary" id = "requirement_type"></td>
			</tr>
			<tr>
				<td>Requirement Assignee:</td>
				<td><input type="text" name="requirement_assignee" id = "requirement_type"></td>
			</tr>
			<tr>
				<td>Requirement Version:</td>
				<td><input type="text" name="requirement_version" id = "requirement_type"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Update"></td>
			</table></center>
		</form>
	</div> <!--content -->
	</div> <!--container -->
</body>
</html>
