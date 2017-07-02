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
	$image=$_POST['image'];
	$iframe=$_POST['iframe'];
	$description=$_POST['description'];
	$id=$_POST['package_id'];
	$sql="UPDATE package SET category='$category', package_name='$package_name',image='$image',iframe='$iframe',description='$description'

			WHERE package_id=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		header("Location:view_package.php");
	}
	else{
		header("Location:view_package.php");
	}
} 

?>