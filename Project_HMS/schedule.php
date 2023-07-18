<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link rel="stylesheet" href="schedule.css">
</head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body >
  
	<div class="container">

	 
              
					 <div class="schedule__container">
			 <form action= "schedulecontroller.php" method ="post" enctype="multipart/form-data">
		
<h3 align="center">Schedule</h3>
                
					<table align="center">

					
								<td><b>Doctor's Name</td></b><td>
								
							</tr>
							<td><input type= "text" name="username" value="" placeholder="enter your name" size="25" required ></td>
							<td></td>
						</tr>
							
						<tr>
                            <td><strong>Date</strong><br>
                            <input type="date" name="sd" required></td> <td>
							<td></td>
						</tr>
                           
							  
						<tr>
								
							<td>Day</td>
							<tr>
								<td><input type="text" name="day" id="day"></td>
							</tr>
							
						</tr>
							
				

							<td>Time</td>
						
							<tr>
								<td><input type="time" name="time" id="time"></td>
							</tr>
							
							<tr> 
							<td>
<br>
                                <input type="submit" class="submitBtn" name="submit" value="Submit">
								<input type="reset" value="Reset"  class="deleteBtn">

							</td>  
							</tr>

						</table>
						
			
		</form>
        </div> 
        </div>
</body>
</html>