<?php
    $con = mysqli_connect("localhost", "root", "", "banking system");
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
.menu {
  overflow: hidden;
  background-color: #333;
}

.menu a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 22px 22px;
  text-decoration: none;
  font-size: 21px;
}

.menu a:hover {
  background-color: #ddd;
  color: black;
}
.menu a.active {
  background-color: #4CAF50;
  color: white;
}
table {
    border: 2px solid blue;
	
	text-align:center;
    font-size:21px;
    font-width:bold;
}
h3{
	text-align:center;
	color:darkmagenta;
	font-family: 'Algerian';
	font-size:30px;
    padding:3;
}

</style>
</head>
<body>


<div class="menu">
  <a href="index.html">Home</a>
  <a href="view customers.php">Customers Details</a>
  <a class="active" href="#history">Transaction History</a>
</div>

</div><h3 >TRANSACTION HISTORY</h3>
   <center> <table id="myTable" border="1" bgcolor="BurlyWood">
          <tr>
            <th>From(Sender)</th>
            <th>To(Reciever)</th>
			<th>Amount Transferred</th>
			<th>Date and Time</th>
            
          </tr>
		  <?php
			
			$sql = "SELECT * FROM `transaction history`";
			$result = mysqli_query($con, $sql);
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td>". $row['From(Sender)'] . "</td>
					 <td>". $row['To(Reciever)'] . "</td>
					 <td>". $row['Amount Transferred'] . "</td>
					 <td>". $row['Date and Time'] . "</td>";
				echo  "</tr>";
			}
        ?>
		  </table></center>
</body>
</html>