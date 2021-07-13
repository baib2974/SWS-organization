<?php include 'navbar.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  margin-top: 50px;
  width: 96%;
  margin-left: 2%;
}
.tr{
    background-color: black;
    color: white;
}
td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body><br>
<?php
$q=mysqli_query($db,"SELECT * FROM `help` ORDER BY `help`.`Name` ASC");

			if(mysqli_num_rows($q)==0)
			{
				echo "<b style='color:red; font-size:35px; margin-left:15px;'>Sorry! No student found with that username. Try searching again.</b>";
			}
			else
			{
				
		echo "<table id='customers'>";
			echo "<tr class='tr'>";
				//Table header
				echo "<th>"; echo  "ID";	echo "</th>";
				echo "<th>"; echo "Name";  echo "</th>";
				echo "<th>"; echo "Email";  echo "</th>";
				echo "<th>"; echo "Contact No";  echo "</th>";
				echo "<th>"; echo "Address";  echo "</th>";
				echo "<th>"; echo "Subject";  echo "</th>";
				echo "<th>"; echo "Message";  echo "</th>";
			echo "</tr>";

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				
				echo "<td>"; echo $row['id']; echo "</td>";
				echo "<td>"; echo $row['Name']; echo "</td>";
				echo "<td>"; echo $row['email']; echo "</td>";
				echo "<td>"; echo $row['contact no']; echo "</td>";
				echo "<td>"; echo $row['Address']; echo "</td>";
				echo "<td>"; echo $row['Subject']; echo "</td>";
				echo "<td>"; echo $row['Message']; echo "</td>";
				
				echo "</tr>";
				
			}
		echo "</table>";
			}
?>
</body>
</html>