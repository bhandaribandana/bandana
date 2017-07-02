<?php
// Create connection
   include("../includes/config.php");
    $conn = mysqli_connect(DBSERVER, DBUSER, DBPASSW, DBNAME);
    // Check connection

        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
if (isset($_POST['update']) && $_POST['update'] == "UPDATE") {
	$destination_name=$_POST['destination_name'];
	$category=$_POST['category'];
	$description=$_POST['description'];
	$image=$_POST['image'];
	$id=$_POST['destination_id'];
	$sql="UPDATE destination SET destination_name='$destination_name', category='$category',description='$description',image='$image'
			WHERE destination_id=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		header("Location:view_destination.php");
	}
	else{
		header("Location:view_destination.php");
	}
} 

?>