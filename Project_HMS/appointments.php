<?php

session_start();
if (!isset($_SESSION['name']) && !isset($_COOKIE['name'])) {
	header("Location:profile.php");
}

?>


<!DOCTYPE html>
<html>

<head>
	<title>Appointments</title>
	<style>
		table,
		th,
		td {
			border: 0.5px solid black;
		}
	</style>
<link rel="stylesheet" href="schedule.css">
<body>





<div class="container">
<div class="schedule__container">
	<table>
			<tr>
				<th>Name</th>
				<th>Date</th>
				<th>Phone</th>
				<th>Ward</th>
				<th>BloodGroup</th>
				<th>Patient condition</th>
				<th>Payment</th>
			</tr>

<?php

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'appointment');
$query = " SELECT * FROM  usertable ";
$selected = mysqli_query($con, $query);
$num = mysqli_num_rows($selected);
while ($row = mysqli_fetch_array($selected)) {

?>
			<tr>
				<td>
					<?php echo $row['name']; ?>
				</td>
				<td>
					<?php echo $row['date']; ?>
				</td>
				<td>
					<?php echo $row['phone']; ?>
				</td>
				<td>
					<?php echo $row['ward']; ?>
				</td>
				<td>
					<?php echo $row['bloodGroup']; ?>
				</td>
				<td>
					<?php echo $row['pCondi']; ?>
				</td>
				<td>
					<?php echo $row['payment']; ?>
				</td>
			</tr>
			<?php
}
    ?>

		</table>

	</div>

	</div>

	<br>

<button><a href="profile.php">Go back to profile</a></button>

</body>

</html>