
<?php
session_start();
if (!isset($_SESSION['staff_id'])) 
{
die(header('Location: ../index.php'));
}
require_once 'connection.php';
	$name = trim($_POST['fname']);
	$sex = $_POST['gender'];
	$birthday =trim ($_POST['birthday']);
	$id = trim($_POST['id']);
	$phone = trim($_POST['phone']);
    $depart = trim($_POST['department']);
    $position = trim($_POST['position']);
    $grade = trim($_POST['grade']);//-----------------------
    $years = trim($_POST['years']);//----------------------
    $uname = trim($_POST['username']);    
    $typ = trim($_POST['type']);
    $depart = trim($_POST['department']);
	$upass = trim($_POST['password']);
	$cpass = trim($_POST['password2']);//---------------------
    $date= date("Y/m/d");
    if($typ=="clerk"){
        $level="clerk";
    }
     $level="staff";
    
	// username exist or not
    $query = "SELECT * FROM register_staff WHERE username='$uname'";
   $result = $con->query($query);
    // if username not found then register
	if ($upass != $cpass) {
	header('Location: ../register.php?error');
	} else{  
//then register
	if( $result->num_rows== 0){
        
if($con->query("INSERT INTO register_staff(fname, sex, department, position, 
username, password, date_registered, id_number, phone_number, level) 
VALUES('$name','$sex','$depart','$position','$uname','$upass','$date','$id','$phone','$level')"))	{
			?>
			<script>alert('Successfully registered ');</script>
			<?php
			header('Location: ../home.php');
		}
		else
		{
			?>
			<script>alert('Error while registering you...');</script>
			<?php
		}		
	}
	else{
			?>
			<script>alert('Sorry Username already taken ...');</script>
			<?php
	}
		
    }	

?>