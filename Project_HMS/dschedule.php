<?php

session_start();
if (!isset($_SESSION['name']) && !isset($_COOKIE['name'])) {
	header("Location:profile.php");
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>My Schedule</title>
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
				<th>Day</th>
				<th>Time</th>
			
			</tr>

<?php

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'useregistrations');
$n=$_SESSION["name"]; 
$query = " SELECT * FROM  usertable WHERE name = '$n'";
$selected = mysqli_query($con, $query);
$num = mysqli_num_rows($selected);

while ($row = mysqli_fetch_assoc($selected)) {

?>
			<tr>
				<td>
					<?php echo $row['name']; ?>
				</td>
				<td>
					<?php echo $row['date']; ?>
				</td>
				<td>
					<?php echo $row['day']; ?>
				</td>
				<td>
					<?php echo $row['time']; ?>
				</td>
			
			</tr>
			<?php
}
    ?>

		</table>

	</div>

	</div>

	<br>

<button class="submitBtn"><a href="profile.php">Go back to my profile</a></button>

</body>

</html>