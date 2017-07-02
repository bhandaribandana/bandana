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
	$image=$_POST['image'];
	$id=$_POST['id'];
	$sql="UPDATE slider SET title='$title',image='$image'
			WHERE id=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		header("Location:view_slider.php");
	}
	else{
		header("Location:view_slider.php");
	}
} 

?>