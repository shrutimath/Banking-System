<?php
    $con = mysqli_connect("localhost", "root", "", "banking system"); //database connection
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
body{
	margin:0;
	border:0;
	font-family: Arial, Helvetica, sans-serif;
	background-image: url('pages.jpg');
	background-size:100% 100%;
	background-attachment: fixed;
}
.menu 
{
	overflow: hidden;
	background-color: #333;
}
.menu a
{
	float: left;
	color: #f2f2f2;
	text-align: center;
	padding: 22px 22px;
	text-decoration: none;
	font-size: 21px;
}
.menu a:hover
{
	background-color: #ddd;
	color: black;
}
.menu a.active
{
	background-color: #4CAF50;
	color: white;
}
table
{
    border: 2px solid blue;
	text-align:center;
    font-size:21px;
    font-width:bold;
}
h3
{
	text-align:center;
	color:#B22222;
	font-family:'Palatino Linotype';
	font-size:38px;
    padding:3;
}
button
{
	color: white;
    background: purple;
    padding: 8px 8px;
    font-size: 17px;
    border: 2px solid white;
    border-radius: 14px;
    cursor: pointer;
}
</style>
</head>
<body>
	<div class="menu">
	<a href="index.html">Home</a>
	<a class="active" href="#customers">Customers Details</a>
	<a href="history.php">Transaction History</a>
<br>
<br>
<br>
	</div><h3>Customers</h3>
	<center> 
		<table id="myTable" border="1" bgcolor="BurlyWood">
			<tr>
				<th>Name</th>
				<th>Email-id</th>
				<th>A/c no</th>
				<th>Balance</th>
				<th>Action</th>
			</tr>
        <?php
			
			$sql = "SELECT * FROM `view customers`";
			$result = mysqli_query($con, $sql);
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<form method ='post' action = 'transaction form.php'>";			
				echo "<td>". $row['Name'] . "</td>
					 <td>". $row['Email-id'] . "</td>
					 <td>". $row['A/c no'] . "</td>
					 <td>". $row['Balance'] . "</td>";
				echo "<td> <a href='transaction form.php'><button  class='button' name='user' type='submit'  value= '{$row['Name']} '>Transfer to</button></a></td>";
				echo "</form>";
				echo  "</tr>";
			}
        ?>
			
          
		</table>
	</center>

</body>
</html>