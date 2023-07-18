<?php 
session_start();
if(!isset($_SESSION['name']) && !isset($_COOKIE['name'])){
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Password Change</title>
	<link rel="stylesheet" href="schedule.css">	
</head>
<body >

<div class="container">

<div class="schedule__container">
    <h2>Password Change</h2><br><br>
    			
<a href="profile.php">View Profile</a><br><br>
	

<form action = "passchng.php"  method="POST" >
                <p >You have to log in again after making any changes</p><br>    
                <label>Recent Password</label> 
				<input type="password" name="password" id ="password" >	<span style= "color:red" id = "alert4"></span>

                <br><br><hr>
				 <label>New Password</label>
				<input type="password" name="con_pass" id ="con_pass"><span style= "color:red" id = "alert2"></span>
				
                <br><br><hr>
				<label>Confirm Password</label>
				<input type="password" name="cons_passs" id ="cons_passs" ><span style= "color:red" id = "alert3"></span>
			
				<br><br><hr>
				
                <input type="submit" name="submit" value="submit" >
			    <input type="reset" name="reset" value="Reset">
				<?php if (isset($_GET['error'])) { ?>
			    <p class="error" style="color:red; font-size: 100%; font-weight: bold;"><?php echo $_GET['error']; ?></p><?php }?>
         	</form>
			 
		
	
		<form method="POST" action="logout.php">
		<button class="submitBtn" type="submit" name="logout_btn">Log out</button>
		</form>
		
		</div>
</div>
				
</body>

</html>