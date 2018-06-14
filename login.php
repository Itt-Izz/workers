<?php
include('php/connection.php');
//include('sanitise.php');
session_start();
$username = $_POST['username'];
//$salt = sanitise("oimoimmoi8768756875");
//$password=sanitise($_POST['password'].$salt);
$password = $_POST['password'];
$sql ="SELECT * FROM register_staff WHERE username = '$username' AND password = '$password'";
$result= $con->query($sql);
if($result->num_rows>0)
{
	$row=$result->fetch_assoc();
	$_SESSION['staff_id']=$row['staff_id'];
	$_SESSION['username'] =$row['username'];
	$_SESSION['name'] =$row['fname'];
	$_SESSION['level'] =$row['level'];
	
	$_SESSION['level']=$row['level'];
	header('location: home.php');
	// switch($_SESSION['level']){
	// case 'admin':
	// header('Location: admin/index.php');
	// break;
	// case 'staff':
	// header('Location: employee/index.php');
	// break;
	// case 'clerk':
	// header('Location: clerk/index.php');
	// break;
}
else
        {
			$extract2="SELECT password FROM register_staff WHERE username='$username'";
            $result2= $con->query($extract2);
            $row = $result2->fetch_assoc();
            $checkpass = $row['password'];

            if($password != $checkpass)
            {
			echo $_SESSION['staff_id']; 
			echo $_SESSION['username'];
			echo $_SESSION['level'];
			
// 			"<script type=\"text/javascript\">
// alert(\"Incorrect Username or Password. Please enter correct Username and Password and try again!!! \");
// </script>";
           
            }

			else{  echo header('Location:index.php');}
        }
?>
