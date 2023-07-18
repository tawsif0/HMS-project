<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptionist</title>
	<link rel="stylesheet" href="schedule.css">
</head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
   
	

	      <div class="container">
              <div class="schedule__container">
			
			  
			 <form action= "appointmentController.php" method ="post" enctype="multipart/form-data">
			
				<h2 align="center">Make your appoinment</h2>
                
					<table align="center">

					
								<td><b>Name</td></b><td>
								
							</tr>
							<td><input type= "text" name="name" value="" placeholder="enter your name" size="25" required ></td>
							<td></td>
						</tr>
							
						<tr>
                            <td><strong>DOB</strong><br>
                            <input type="date" name="sd" required></td> <td>
							<td></td>
						</tr>
                            <td>Phone No.</td>
							
							<tr>
								<td><input type= "number" name="pn"  placeholder="enter your phone number" size="25" required ></td>
								<td></td>
							</tr>
							  
						<tr>
								
							<td>Ward No.</td>
							<tr>
								<td><input type="number" name="bn" size="10"  required></td>
							</tr>
							<td><b>Patient Information:</td></b>
						</tr>
							
				

							<td>Blood Group</td>
						
							<tr>
								<td><input type="text" name="bc" value=""size="10"  required></td>
							</tr>
							
                        
                            <td>
							<select class="injury"name = "injury">
							<option value="">Patient Condition </option>
                            
								<option value="Minor Injury">Minor</option>
								<option value="Major Injury">Major</option>
								<option value="Emergency Injury">Emergency</option>
								<option value="Accident Case">Accident</option>
                               
                               
                            </td>
								

							
							
						<tr>
                           
							<td>Payment</td>
							
							</tr>
							<td> <input type="number" name="payment" id="payment"> </td>
                            
                            <tr>
	                        <td>
							<input type="checkbox" name="" required> All Checked
					
						</tr>
	                        <tr>
						    </td>
								
							<tr>
							<td>

                                <input class="submitBtn" type="submit" name="submit" value="Submit">
								<input class="deleteBtn" type="reset" value="Reset" >

							</td>  
							</tr>

						</table>
						
		
		</form>

		
		</div>
		</div>
</body>
</html>