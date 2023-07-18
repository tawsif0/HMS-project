<?php
if(isset($_POST["submit"]))
{
$username = $_POST["username"];
if (strlen($username) > 5)
{
    echo "Username accepted";
    header('Location:plogin.php');
    echo "<br><br>";    
}
else {
    echo "Invalid Username";
    echo "<br><br>";
}


$addr = $_POST["addr"];
if (strlen($addr) > 5)
{
    echo "Address accepted";
  
    echo "<br/>";     
}
else {
    echo "Invalid Address";
    echo "<br/>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient register</title>
    <link rel="stylesheet" href="schedule.css">
</head>
<body>
    <div class="container">
        <div class="schedule__container">
            
       <h3 align="center">Patient's Registration</h3>
    placeholder="Re-type your password" > <br> <br>
	
</div>

<input type="submit" name="submit" value="Submit" class="submitBtn">
<script src="lvalid.js"></script><form id="form" class="form" action="pregval.php" method="post" autocomplete="" onsubmit="return validated()">
<div class="form-control">
    <label for="username">Username:</label><br>
<input type="text" name="username" id="username" ><br> <br>
<label for="email">Email:</label><br>
<input type="email" name="email" id="email" ><br><br>
<label for="phno">Phone No:</label><br>
<input type="text" name="phno" id="phno" ><br><br>
<label for="gender">Gender: </label>
<input type="radio" name="gender" id="gender" value="male">
<label for="male">Male</label> 
<input type="radio" name="gender" id="gender" value="female"> 
<label for="female">Female</label> <br> <br>

<label for="addr">Address</label><br>
<textarea rows="1" cols="25" name="addr" id="addr" placeholder="Enter your address" ></textarea><br><br>

<label for="dob">Date of Birth:</label>
<input type="date" name="dob" id="dob" value="dob" required><br><br>

<label for="password">Password: </label><br>
<input type="Password" name="password" id="password" placeholder="Type your password" >  <br> <br>
<label for="cpass">Confirm Password: </label><br>
<input type="Password" name="cpass" id="cpass" 

</form>

<button class="deleteBtn"><a href="plogin.php">Aleady have account</a></button>

</div>
</div>
</body>
</html>