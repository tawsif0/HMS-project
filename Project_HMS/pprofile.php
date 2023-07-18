<?php 
	
    session_start();
    if(!isset($_SESSION['name']) && !isset($_COOKIE['name'])){
		header("Location:plogin.php");
	}

?>
<?php
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'useregistrationss');

 $n=$_SESSION["name"]; 
$query = " SELECT * FROM  usertable WHERE name = '$n'";

$selected = mysqli_query($con,$query);
$num =mysqli_num_rows($selected);
while($row=mysqli_fetch_assoc($selected)){
	$name = $row['name'];
	$email = $row['email'];
	$phno= $row['phno'];
    $gender = $row['gender'];
    $dob = $row['dob'];
    $addr = $row['addr'];
}
?>	
<!DOCTYPE html>
<html>
<head>
	<title>User_Account</title>
	<link rel="stylesheet" href="schedule.css">
<body>   
	<div class="conatiner">
		<div class="schedule__container">
<h1> Welcome <?php echo $_SESSION['name']; ?> </h1>
<ul>
				<ol><a href="index.php ">Home</a></ol><br><br>
				
				
	</ul> 
<div>  
<tr>
								<td>Name:</td>
								<td><span>:</span><?php echo $name; ?></td><br><hr><br>
</tr> 
<tr>
								<td>Email</td>
								<td><span>:</span><?php echo $email; ?></td><br><hr><br>
</tr>
<tr>
								<td>Phone no</td>
								<td><span>:</span><?php echo $phno; ?></td><br><hr><br>
</tr>
<tr>
								<td>Date of Birth: </td>
								<td><span><?php echo $dob; ?></span>

								</td><br><hr><br>
</tr>


<tr>
								<td>Gender: :</td>
								<td><span><?php echo $gender ; ?></span></td><br><hr><br>
</tr>
<tr>
								<td>Address: :</td>
								<td><span><?php echo $addr; ?></span></td><br><hr><br>
</tr>                       
</div>
                        <button class="deleteBtn"><a href="logout1.php">logout</a></button> <br> <br>
                        <button class="deleteBtn"><a href="pappointment.php">See my appointments</a></button>
						<button class="submitBtn"><a href="pschedule.php">See the Schedule of Doctor's</a></button>
</div>
</div>	
</body>

</html>