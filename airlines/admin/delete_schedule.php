<?php // Create connection
   include("../includes/config.php");
    $conn = mysqli_connect(DBSERVER, DBUSER, DBPASSW, DBNAME);
    // Check connection
        if (!$conn) {
        die("Connection failed: ". mysqli_connect_error());
        }
	if(isset($_GET['flight_no'])){
	$id=$_GET['flight_no'];
	$sql="DELETE from flight_schedule WHERE flight_no=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		header("Location:view_schedule.php");
	}else{
		header("Location:view_schedule.php");
	}
}
?>