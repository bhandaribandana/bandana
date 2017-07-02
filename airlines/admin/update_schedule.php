<?php
// Create connection
   include("../includes/config.php");
    $conn = mysqli_connect(DBSERVER, DBUSER, DBPASSW, DBNAME);
    // Check connection

        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
if (isset($_POST['update']) && $_POST['update'] == "UPDATE") {
	$Op_days=$_POST['Op_days'];
	$Departure=$_POST['Departure'];
	$Arrival=$_POST['Arrival'];
	$Route=$_POST['Route'];
	$id=$_POST['flight_no'];
	$sql="UPDATE flight_schedule SET Op_days='$Op_days', Departure='$Departure',Arrival='$Arrival',Route='$Route'
			WHERE flight_no=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		header("Location:view_schedule.php");
	}
	else{
		header("Location:view_schedule.php");
	}
} 

?>