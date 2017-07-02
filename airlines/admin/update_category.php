<?php
// Create connection
   include("../includes/config.php");
    $conn = mysqli_connect(DBSERVER, DBUSER, DBPASSW, DBNAME);
    // Check connection

        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
if (isset($_POST['update']) && $_POST['update'] == "UPDATE") {
	$title=$_POST['title'];
	$status=$_POST['status'];
	$id=$_POST['id'];
	$sql="UPDATE category SET title='$title', status='$status'
			WHERE cat_id=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		header("Location:view_category.php");
	}
	else{
		header("Location:view_category.php");
	}
} 

?>