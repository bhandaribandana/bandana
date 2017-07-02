<?php // Create connection
   include("../includes/config.php");
    $conn = mysqli_connect(DBSERVER, DBUSER, DBPASSW, DBNAME);
    // Check connection
        if (!$conn) {
        die("Connection failed: ". mysqli_connect_error());
        }
	if(isset($_GET['destination_id'])){
	$id=$_GET['destination_id'];
	$sql="DELETE from destination WHERE destination_id=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		header("Location:view_destination.php");
	}else{
		header("Location:view_destination.php");
	}
}
?>