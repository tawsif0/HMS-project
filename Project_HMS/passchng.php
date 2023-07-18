<?php 
	
    session_start();
    if(!isset($_SESSION['name']) && !isset($_COOKIE['name'])){
		header("Location:login.php");
	}

?>
<?php
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'useregistrations');
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $password = $_POST['password'];
    $con_pass =  $_POST['con_pass'];
    $cons_passs =  $_POST['cons_passs'];
   
    $n=$_SESSION["name"]; 
    $query = " SELECT * FROM  usertable WHERE name = '$n'";
    
    
    
    $selected = mysqli_query($con,$query);
    $num =mysqli_fetch_array($selected);
    $data_pwd = $num['password'];
    if($data_pwd==$password){
        if($con_pass==$cons_passs){
            $update_q= "UPDATE usertable SET password = '$con_pass' WHERE name = '$n'";
            $update_pwd = mysqli_query($con,$update_q);
            echo "<script> alert('Update Successfully'); window.location='login.php'</script>";

        }
        else{
            echo "<script> alert(' Password is not matched'); window.location='chngpass.php'</script>";
        }
        
    }  
    else{
        echo "<script> alert('Old Password is wrong'); window.location='chngpass.php'</script>";
    }




   
}


?>