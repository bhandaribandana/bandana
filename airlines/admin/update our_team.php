<?php
// Create connection
   include("../includes/config.php");
    $conn = mysqli_connect(DBSERVER, DBUSER, DBPASSW, DBNAME);
    // Check connection

        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
if (isset($_POST['update']) && $_POST['update'] == "UPDATE") {
	$category=$_POST['category'];
	$package_name=$_POST['package_name'];
	$id=$_POST['id'];
	$sql="UPDATE category SET title='$title', status='$status'
			WHERE package_id=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		header("Location:view.php");
	}
	else{
		header("Location:table.php");
	}
} 

?>