<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptionist Login</title>
    <link rel="stylesheet" href="schedule.css">
</head>
<body>
    <div class="container">
        <div class="schedule__container">
            
       <h2 align="center">Receptionist Login</h2>
    <form name="form" id="form" action="rlogval.php" method="post" autocomplete="" onsubmit="return validated()">
<label for="username">Username:</label><br>
<input type="text" name="username" id="username" placeholder="Type your name" ><br> <br>

<label for="password">Password: </label><br>
<input type="Password" name="password" id="password" placeholder="Type your password" >  <br> <br>

<input type="submit" value="Login" class="submitBtn"> <br> <br>
<script src="lvalid2.js"></script>
</form>
<button class="deleteBtn"><a href="index.php">Go back </a></button>
</div>
</div>
</body>
</html>